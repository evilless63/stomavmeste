<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Document;
use App\Models\Employee;
use App\Models\Link;
use App\Models\Vacancy;
use App\Models\Meta;
use Illuminate\Http\Request;

class ClientSiteController extends Controller
{
    public function index()
    {
        return view('client.index')->with([
            'articles' => Article::where('type', '=', 'NEWS')->where('showable', '=', '1')->orderBy('sort_order', 'asc')->take(3)->get(),
            'entity' => Meta::where('page', '=', 'index')->first(),
            'banners' => Banner::where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
        ]);
    }
    public function help()
    {
        return view('client.help')->with([
            'entity' => Meta::where('page', '=', 'help')->first(),
        ]);
    }
    public function deals()
    {
        return view('client.deals')->with([
            'entity' => Meta::where('page', '=', 'deals')->first(),
        ]);
    }
    public function articles()
    {
        return view('client.articles')->with([
            'articles' => Article::where('type', '=', 'NEWS')->where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'entity' => Meta::where('page', '=', 'articles')->first(),
        ]);
    }
    public function organisations()
    {
        return view('client.organisations')->with([
            'entity' => Meta::where('page', '=', 'organisations')->first(),
        ]);
    }
    public function about()
    {
        return view('client.about')->with([
            'employees' => Employee::where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'reports' => Document::where('type', '=' ,'REPORT')->orderBy('sort_order', 'asc')->get(),
            'documents' => Document::where('type', '=' ,'STATUTORY')->orderBy('sort_order', 'asc')->get(),
            'entity' => Meta::where('page', '=', 'about')->first(),
        ]);
    }

    public function vacancy()
    {
        return view('client.vacancy')->with([
            'vacancies' => Vacancy::where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'entity' => Meta::where('page', '=', 'vacancy')->first(),
        ]);
    }

    public function smi()
    {
        return view('client.smi')->with([
            'links' => Link::where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'entity' => Meta::where('page', '=', 'smi')->first(),
        ]);
    }

    public function patients()
    {
        return view('client.patients')->with([
            'articles' => Article::where('type', '=', 'PATIENT-INFO')->where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'entity' => Meta::where('page', '=', 'patients')->first(),
        ]);
    }

    public function article($slug) {
        return view('client.article')->with([
            'articles' => Article::where('type', '=', 'NEWS')->where('showable', '=', '1')->orderBy('sort_order', 'asc')->get(),
            'entity' => Article::where('slug', '=', $slug)->first()
        ]);
    }

}
