<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
//panggil model
use App\Companies;
use App\Employees;
//panggil pustaka/library/vendor
use DB;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_employees = DB::table('employees')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->select('employees.*','companies.nama AS company')
        ->get();
         return view('employees.index', compact('ar_employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //arahkan ke form input data baru

         return view('employees.form');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validator = Validator::make(request()->all(),[

            'nama'=>'required|max:45',
            'email'=>'required',
            'company_id'=>'required',
         ],[
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'email.required'=>'Email Wajib untuk diisi',
             'company_id.required'=>'Company Wajib untuk dipilih',
         ])->validate();

        //1. tangkap request form
        DB::table('employees')->insert(
            [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'company_id'=>$request->company_id,
            ]
        );


        //landing page
        return redirect ('/employees');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_employees = DB::table('employees')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->select('employees.*','companies.nama AS company')
            ->where('employees.id','=',$id)
            ->get();
            return view('employees.show', compact('ar_employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //tampilkan form untuk menampilkan
        //data lama yg mau diedit sebanyak 1 baris data
        $data = DB::table('employees')->where('id',$id)->get();
        return view('employees/form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(request()->all(),[

            'nama'=>'required|max:45',
            'email'=>'required',
            'company_id'=>'required',
         ],[
             'nama.required'=>'Nama Wajib untuk diisi',
             'nama.max'=>' Nama ini melebihi 45 karakter',
             'email.required'=>'Email Wajib untuk diisi',
             'company_id.required'=>'Company Wajib untuk dipilih',
         ])->validate();
        DB::table('employees')->where('id',$id)->update(
            [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'company_id'=>$request->company_id,
            ]
     );

        return redirect ('/employees'.'/'.$id);

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //hapus data
        DB::table('employees')->where('id',$id)->delete();

        return redirect ('/employees');
    }

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to cetak PDF'];
        $pdf = PDF::loadView('employees.myPDF', $data);
        return $pdf->download('filePDF.pdf');
    }

    public function employeesPDF()
    {
        $ar_employees = DB::table('employees')
        ->join('companies', 'companies.id', '=', 'employees.company_id')
        ->select('employees.*','companies.nama AS company')
        ->get();
         $pdf = PDF::loadView('employees.employeesPDF', ['ar_employees'=>$ar_employees])
               ->setPaper('f4','potrait');
        return $pdf->download('employees-pdf.pdf');
    }

    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

}
