<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;
use crocodicstudio\crudbooster\controllers\partials\ButtonColor;
use App\Exports\PendataanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Kader;

use Session;

use App\Exports\KaderExport;
use App\Imports\KaderImport;



class AdminPendataanController extends CBController {


    public function cbInit()
    {
        $this->setTable("kader");
        $this->setPermalink("pendataan");
        $this->setPageTitle("Pendataan");

        $this->addText("Nama","nama")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Jabatan","jabatan",["table"=>"jabatan","value_option"=>"id","display_option"=>"nama_jabatan","sql_condition"=>""]);
		$this->addText("Tempat Lahir","tp_lahir")->strLimit(150)->maxLength(255);
		$this->addDate("Tgl Lahir","tgl_lahir");
		$this->addTextArea("Alamat","alamat")->strLimit(150);
		$this->addSelectTable("Pendidikan Terahir","id_sekol",["table"=>"sekolah","value_option"=>"id_sekolah","display_option"=>"jenjang","sql_condition"=>""])->showIndex(false);
		$this->addNumber("Ranting","id_rant")->defaultValue(cb()->session()->id())->readonly();
		$this->addImage("Foto","foto")->required(false)->showIndex(false)->encrypt(true)->resize(500,);
        $this->addIndexActionButton("Import", url("kader"), "fa fa-upload", ButtonColor::class);
        $this->addIndexActionButton("Export", url("sistem/pendataan/export"), "fa fa-download", ButtonColor::class);
        
        
        // $this->app->bind(PendataanExport::class, function() {
        //     return new PendataanExport($this->app['excel']);
        // });
        
        // $this->setBeforeIndexTable(
            
        // );


        // To modify default index query
        $this->hookIndexQuery(function($query) {
        // Todo: code query here

        // You can make query like laravel db builder
        $query->where("id_rant", cb()->session()->id());

        // Don't forget to return back
        return $query;
    });


    




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
