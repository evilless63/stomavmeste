<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Ссылки на СМИ',
            'entity_desc' => 'Список ссылок на СМИ',
            'entity_model_collection' => Link::orderBy('sort_order', 'asc')->get(),
            'type' => 'links',
            'entity_create_title' => 'Добавление новой ссылки на СМИ'
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
            'entity_title' => 'Добавление новой ссылки на СМИ',
            'entity_desc' => 'Добавление новой ссылки на СМИ',
            'type' => 'links',
            'entity_model_inputs' => Link::$inputsByEntity
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
        $this->validateLink($request);

        $file = $request->file('image');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path().'/images/links';
        $file->move($destinationPath,$fileName);

        $data = $request->all();
        $data['image'] = $fileName;
        Link::create($data);
        return redirect()->route('manage.links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование ссылки на СМИ',
            'entity_desc' => 'Редактирование ссылки на СМИ',
            'type' => 'links',
            'entity_model_inputs' => Link::$inputsByEntity,
            'entity' => $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $this->validateLink($request);
        $data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $destinationPath = public_path().'/images/links';
            $file->move($destinationPath,$fileName);


            $data['image'] = $fileName;
        }

        $link->update($data);
        return redirect()->route('manage.links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('manage.links.index');
    }

    public function validateLink(Request $request) {
        $validated = $request->validate([
            'link' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);
    }

    public function updateOrder(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = Link::find($id);
                $menu->sort_order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
