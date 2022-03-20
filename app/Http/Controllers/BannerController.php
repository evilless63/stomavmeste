<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Баннеры',
            'entity_desc' => 'Список баннеров',
            'entity_model_collection' => DB::table('banners')->orderBy('sort_order', 'asc')->get(),
            'type' => 'banners',
            'entity_create_title' => 'Создание баннера'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.create')->with([
            'entity_title' => 'Создание баннера',
            'entity_desc' => 'Создание баннера',
            'type' => 'banners',
            'entity_model_inputs' => Banner::$inputsByEntity
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateArticle($request);
        $file = $request->file('image');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path().'/images/banners';
        $file->move($destinationPath,$fileName);

        $data = $request->all();
        $data['image'] = $fileName;
        Banner::create($data);
        return redirect()->route('manage.banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование баннера',
            'entity_desc' => 'Редактирование баннера',
            'type' => 'banners',
            'entity_model_inputs' => Banner::$inputsByEntity,
            'entity' => $banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $destinationPath = public_path().'/images/banners';
            $file->move($destinationPath,$fileName);
            $data['image'] = $fileName;
        }

        if($request->has('showable')) {
            if($request->showable == 'on') {
                $data['showable'] = 1;
            }
        }

        if($request->has('help_link')) {
            if($request->showable == 'on') {
                $data['showable'] = 1;
            }
        }

        $banner->update($data);
        return redirect()->route('manage.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('manage.banners.index');
    }

    public function validateArticle(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'title_description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
    }

    public function updateOrder(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = Banner::find($id);
                $menu->sort_order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
