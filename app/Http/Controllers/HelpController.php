<?php

namespace App\Http\Controllers;

use App\Exports\HelpsExport;
use App\Exports\MailingExport;
use App\Models\Help;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HelpController extends Controller
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
        $request->validate([
            'phone' => 'required|string',
            'message' => 'required|string',
            'name' => 'required|string',
        ], [
            'phone.required' => 'Необходимо указать телефон или другой способ для связи',
            'message.required' => 'Необходимо указать текст сообщения',
            'name.required' => 'Укажите, как к вам обращаться'
        ]);

        if(Help::create($request->all())) {
            return "<h5>Ваше сообщение успешно отправлено! Можно закрыть окно</h5>";
        } else {
            return "При отправке сообщения возникли проблемы!";
        }
    }
    public function export(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new HelpsExport(), 'help_messages.xlsx');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        //
    }
}
