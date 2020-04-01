<?php

namespace App\Exports;

use App\Companies;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class CompaniesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $ar_companies = DB::table('companies')->get();


        return $ar_companies;
    }
}
