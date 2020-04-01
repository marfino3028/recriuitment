<?php

namespace App\Exports;

use App\Employees;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class EmployeesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $ar_employees = DB::table('employees')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->select('employees.*','companies.nama AS company')
        ->get();


        return $ar_employees;
    }
}
