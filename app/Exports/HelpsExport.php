<?php

namespace App\Exports;

use App\Models\Help;
use Maatwebsite\Excel\Concerns\FromCollection;

class HelpsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Help::all();
    }
}
