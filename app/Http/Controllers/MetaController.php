<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.metamanage')->with([
           'metas' => [
               ['page' => 'index', 'name' => 'Главная страница', 'info' => Meta::where('page', '=', 'index')->get()],
               ['page' => 'help', 'name' => 'Как помочь', 'info' => Meta::where('page', '=', 'help')->get()],
               ['page'=> 'deals', 'name' => 'Что мы делаем', 'info' => Meta::where('page', '=', 'deals')->get()],
               ['page'=> 'articles', 'name' => 'Статьи', 'info' => Meta::where('page', '=', 'articles')->get()],
               ['page'=> 'organisations', 'name' => 'Организациям', 'info' => Meta::where('page', '=', 'organisations')->get()],
               ['page'=> 'about', 'name' => 'О нас', 'info' => Meta::where('page', '=', 'about')->get()],
               ['page'=> 'vacancy', 'name' => 'Вакансии', 'info' => Meta::where('page', '=', 'vacancy')->get()],
               ['page'=> 'patients', 'name' => 'Пациентам', 'info' => Meta::where('page', '=', 'patients')->get()],
               ['page' => 'smi', 'name' => 'Сми о нас', 'info' => Meta::where('page', '=', 'smi')->get()],
           ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function updateOrCreate(Request $request, Meta $meta)
    {
        $meta = Meta::where('page', '=', $request->page)->first();
        if($meta->count() > 0) {
            $meta->update($request->all());
        } else {
            $meta->create($request->all());
        }
        return redirect()->route('manage.meta.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        //
    }
}
