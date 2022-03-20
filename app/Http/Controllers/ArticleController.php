<?php

namespace App\Http\Controllers;

use App\Models\Article;
use ElForastero\Transliterate\Transliterator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Новости',
            'entity_desc' => 'Список новостей',
            'entity_model_collection' => DB::table('articles')->where('type', '=' ,'NEWS')->orderBy('sort_order', 'asc')->get(),
            'type' => 'articles',
            'entity_create_title' => 'Создание новости'
        ]);
    }

    public  function patientInfosIndex()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Статьи',
            'entity_desc' => 'Список статей',
            'entity_model_collection' => DB::table('articles')->where('type', '=' ,'PATIENT-INFO')->orderBy('sort_order', 'asc')->get(),
            'type' => 'articles',
            'entity_create_title' => 'Создание статьи'
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
            'entity_title' => 'Создание новости',
            'entity_desc' => 'Создание новости',
            'type' => 'articles',
            'entity_model_inputs' => Article::$inputsByEntity
        ]);
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

        $file = $request->file('image');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path().'/images/articles';
        $file->move($destinationPath,$fileName);

        $data = $request->all();
        $data['image'] = $fileName;
        Article::create($data);
        return redirect()->route('manage.articles.index');
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
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование новости',
            'entity_desc' => 'Редактирование новости',
            'type' => 'articles',
            'entity_model_inputs' => Article::$inputsByEntity,
            'entity' => $article
        ]);
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
        $data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $destinationPath = public_path().'/images/articles';
            $file->move($destinationPath,$fileName);
            $data['image'] = $fileName;
        }

        if($request->has('showable')) {
            if($request->showable == 'on') {
                $data['showable'] = '1';
            }
        }

        $article->update($data);
        return redirect()->route('manage.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('manage.articles.index');
    }

    public function validateArticle(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
    }

    public function transliteration(String $string): String {
        $transliteration = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);
        return $transliteration->make($string);
    }

}
