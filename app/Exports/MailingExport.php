<?php

namespace App\Exports;

use App\Models\Mailing;
use Maatwebsite\Excel\Concerns\FromCollection;

class MailingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mailing::all();
    }
}
