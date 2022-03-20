<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Документы',
            'entity_desc' => 'Список документов',
            'entity_model_collection' => Document::where('type', '=' ,'STATUTORY')->orderBy('sort_order', 'asc')->get(),
            'type' => 'documents',
            'entity_create_title' => 'Добавление нового документа'
        ]);
    }

    public function reports()
    {
        return view('manage.entity')->with([
            'entity_title' => 'Отчеты',
            'entity_desc' => 'Список отчетов',
            'entity_model_collection' => Document::where('type', '=' ,'REPORT')->orderBy('sort_order', 'asc')->get(),
            'type' => 'documents',
            'entity_create_title' => 'Создание нового отчета'
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
            'entity_title' => 'Добавление документа',
            'entity_desc' => 'Добавление документа',
            'type' => 'documents',
            'entity_model_inputs' => Document::$inputsByEntity
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
        $this->validateDocument($request);

        $data = $request->all();

        $data = $this->setFileImage($request, $data);
        Document::create($data);
        return redirect()->route('manage.documents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование документа',
            'entity_desc' => 'Редактирование документа',
            'type' => 'documents',
            'entity_model_inputs' => Document::$inputsByEntity,
            'entity' => $document
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $this->validateDocument($request);

        $data = $request->all();

        if($request->hasFile('file')) {
            $data = $this->setFileImage($request, $data);
        }

        $document->update($data);

        return redirect()->route('manage.documents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('manage.documents.index');
    }

    public function validateDocument(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:doc,pdf,docx',
        ]);
    }

    /**
     * @param Request $request
     * @param array $data
     * @return array
     */
    public function setFileImage(Request $request, array $data): array
    {
        $file = $request->file('file');
        $fileName = time() . $file->getClientOriginalName();
        if ($data['type'] == 'REPORT') {
            $destinationPath = public_path() . '/files/reports';
        } else {
            $destinationPath = public_path() . '/files/documents';
        }

        $file->move($destinationPath, $fileName);

        $data['file'] = $fileName;
        return $data;
    }

    public function updateOrder(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = Document::find($id);
                $menu->sort_order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
