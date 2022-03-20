<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Вакансии',
            'entity_desc' => 'Список открытых вакансий',
            'entity_model_collection' => Vacancy::orderBy('sort_order', 'asc')->get(),
            'type' => 'vacancies',
            'entity_create_title' => 'Добавление новой вакансии'
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
            'entity_title' => 'Создание вакансии',
            'entity_desc' => 'Создание вакансии',
            'type' => 'vacancies',
            'entity_model_inputs' => Vacancy::$inputsByEntity
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
        $this->validateVacancy($request);
        $data = $request->all();

        Vacancy::create($data);
        return redirect()->route('manage.vacancies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование вакансии',
            'entity_desc' => 'Редактирование вакансии',
            'type' => 'vacancies',
            'entity_model_inputs' => Vacancy::$inputsByEntity,
            'entity' => $vacancy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $this->validateVacancy($request);
        $data = $request->all();
        $vacancy->update($data);

        return redirect()->route('manage.vacancies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('manage.vacancies.index');
    }

    public function validateVacancy(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'about' => 'required'
        ]);
    }

    public function updateOrder(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = Vacancy::find($id);
                $menu->sort_order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
