<?php

namespace App\Http\Controllers;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\CompaniesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Companies;
use DB;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_companies = DB::table('companies')->get();
     return view('companies.index', compact('ar_companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.form');
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
        'email'=>'required|email',
        'logo'=>'image|mimes:png|max:2048|dimensions:min_width=100,min_height=100',
        'website'=>'required|active_url',


         ],[
            'nama.required'=>'Nama Wajib untuk diisi',
            'nama.max'=>' Nama ini melebihi 45 karakter',
            'nama.email'=>'jangan lupa @ :)',
            'email.required'=>'Email Wajib untuk diisi',
            'logo.image'=>'Ektensi File Foto Keterangan Hanya Boleh .png',
            'logo.max' =>'File Foto Melebihi 2048 KB',
            'logo.dimensions' =>'Minimum gambar 100 x 100',
             'website.required'=>'masukkan url yang Anda inginkan',
             'website.active_url'=>'masukkan url yang Benar',
         ])->validate();

         if(!empty($request->logo)){

            $request->validate([
                'logo'=>'image|mimes:png|max:2048|dimensions:min_width=100,min_height=100',
            ]);
            $fileName = $request->nama.'.png';
            $request->logo->move(public_path('company'), $fileName);
            }else{
            $fileName = '';
            }

        //1. tangkap request form
        DB::table('companies')->insert(
            [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'logo'=>$fileName,
                'website'=>$request->website,
            ]
        );


        //landing page
        return redirect ('/companies');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_companies = DB::table('companies')
            ->where('companies.id','=',$id)
            ->get();
            return view('companies.show', compact('ar_companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('companies')->where('id',$id)->get();
        return view('companies/form_edit',compact('data'));
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

        //validasi data
        $validator = Validator::make(request()->all(),[
        'nama'=>'required|max:45',
        'email'=>'required|email',
        'logo'=>'image|mimes:png|max:2048|dimensions:min_width=100,min_height=100',
        'website'=>'required|',


         ],[
            'nama.required'=>'Nama Wajib untuk diisi',
            'nama.max'=>' Nama ini melebihi 45 karakter',
            'nama.email'=>'jangan lupa @ :)',
            'email.required'=>'Email Wajib untuk diisi',
            'logo.image'=>'Ektensi File Foto Keterangan Hanya Boleh .jpg, .png, .gif',
            'logo.max' =>'File Foto Melebihi 2048 KB',
            'logo.dimensions'=>'Minimum gambar 100 x 100',
             'website.required'=>'masukkan url yang Anda inginkan',

         ])->validate();

         if(!empty($request->logo)){

            $request->validate([
                'logo'=>'image|mimes:png|max:2048|dimensions:min_width=100,min_height=100',
            ]);
            $fileName = $request->nama.'.png';
            $request->logo->move(public_path('company'), $fileName);
            }else{
            $fileName = '';
            }


        DB::table('companies')->where('id',$id)->update(
            [
                'nama'=>$request->nama,
                'email'=>$request->email,
                'logo'=>$fileName,
                'website'=>$request->website,
            ]
     );

        return redirect ('/companies'.'/'.$id);

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
        DB::table('companies')->where('id',$id)->delete();

        return redirect ('/companies');
    }

    public function companiesPDF()
    {
        $ar_companies = DB::table('companies')->get();
         $pdf = PDF::loadView('companies.companiesPDF', ['ar_companies'=>$ar_companies])
               ->setPaper('f4','potrait');
        return $pdf->download('companies-pdf.pdf');
    }

    public function export()
    {
        return Excel::download(new CompaniesExport, 'companies.xlsx');
    }
}
