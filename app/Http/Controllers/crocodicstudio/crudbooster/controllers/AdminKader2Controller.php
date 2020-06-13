<?php

namespace App\Http\Controllers\crocodicstudio\crudbooster\controllers;

use Illuminate\Http\Request;

use App\Kader;

use Session;

use App\Exports\KaderExport;
use App\Imports\KaderImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Kader2Controller extends Controller
{
	public function index()
	{
		$kader = Kader::all();
		return view('kader',['kader'=>$kader]);
	}

	public function export_excel()
	{
		return Excel::download(new KaderExport, 'kader.xlsx');
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
 
		// upload ke folder file_kader di dalam folder public
		$file->move('file_kader',$nama_file);
 
		// import data
		Excel::import(new KaderImport, public_path('/file_kader/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data kader Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/kader');
	}
}