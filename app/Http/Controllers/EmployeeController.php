<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use ElForastero\Transliterate\Transliterator;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Сотрудники',
            'entity_desc' => 'Список сотрудников',
            'entity_model_collection' => Employee::orderBy('sort_order', 'asc')->get(),
            'type' => 'employees',
            'entity_create_title' => 'Добавление нового сотрудника'
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
            'entity_title' => 'Создание нового сотрудника',
            'entity_desc' => 'Создание нового сотрудника',
            'type' => 'employees',
            'entity_model_inputs' => Employee::$inputsByEntity
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
        $this->validateEmployee($request);

        $file = $request->file('image');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path().'/images/employees';
        $file->move($destinationPath,$fileName);

        $data = $request->all();
        $data['image'] = $fileName;
        Employee::create($data);
        return redirect()->route('manage.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование данных сотрудника',
            'entity_desc' => 'Редактирование данных сотрудника',
            'type' => 'employees',
            'entity_model_inputs' => Employee::$inputsByEntity,
            'entity' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $this->validateEmployee($request);
        $data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $destinationPath = public_path().'/images/employees';
            $file->move($destinationPath,$fileName);
            $data['image'] = $fileName;
        }

        $employee->update($data);
        return redirect()->route('manage.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('manage.employees.index');
    }

    public function validateEmployee(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'profile' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
    }

    public function updateOrder(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = Employee::find($id);
                $menu->sort_order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }

}
