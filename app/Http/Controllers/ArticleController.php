<?php

namespace App\Http\Controllers;

use App\Models\Article;
use ElForastero\Transliterate\Transliterator;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validateArticle($request);
        Article::create($request->all());
        return view('manage.entity')->with([
            'entity_title' => 'Статьи',
            'entity_desc' => 'Список статей',
            'entity_model_collection' => Article::all(),
            'type' => 'articles',
            'entity_create_title' => 'Создание новой статьи'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function validateArticle(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function transliteration(String $string): String {
        $transliteration = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);
        return $transliteration->make($string);
    }


}
