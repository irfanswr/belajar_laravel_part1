<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

use Session;
use PDF;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::paginate(10);

        return view('employee',['employee' => $employee]);
    }

    //Insert
    public function tambah()
    {
    	return view('employee_tambah');
    }

    public function store(Request $request)
    {
        $messages = ['required' => ':attribute wajib diisi cuy!!!'];

    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	],$messages);
 
        Employee::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/employee');
    }

    //Update
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee_edit', ['employee' => $employee]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
        ]);
    
        $employee = Employee::find($id);
        $employee->nama = $request->nama;
        $employee->alamat = $request->alamat;
        $employee->save();
        return redirect('/employee');
    }

    //Delete
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back();
    }

    //Print
    public function cetak_pdf()
    {
    	$employee = Employee::all();
 
    	$pdf = PDF::loadview('employee_pdf',['employee'=>$employee]);
    	return $pdf->stream();
    }

    public function export_excel()
	{
		return Excel::download(new EmployeeExport, 'pegawai.xlsx');
    }
    
    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_employee di dalam folder public
		$file->move('file_employee',$nama_file);
 
		// import data
		Excel::import(new EmployeeImport, public_path('/file_employee/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Employee Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/employee');
	}
}