<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMasterPendataanController extends CBController {


    public function cbInit()
    {
        $this->setTable("kader");
        $this->setPermalink("master_pendataan");
        $this->setPageTitle("Master Pendataan");

        $this->addText("Nama","nama")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Jabatan","jabatan",["table"=>"jabatan","value_option"=>"id","display_option"=>"nama_jabatan","sql_condition"=>""]);
		$this->addText("Tempat Lahir","tp_lahir")->strLimit(150)->maxLength(255);
		$this->addDate("Tgl Lahir","tgl_lahir");
		$this->addTextArea("Alamat","alamat")->strLimit(150);
		$this->addSelectTable("Pendidikan Terahir","id_sekol",["table"=>"sekolah","value_option"=>"id_sekolah","display_option"=>"jenjang","sql_condition"=>""])->showIndex(false);
		$this->addSelectTable("Ranting","id_rant",["table"=>"ranting","value_option"=>"id_ranting","display_option"=>"nama_ranting","sql_condition"=>""]);
		$this->addImage("Foto","foto")->required(false)->showIndex(false)->encrypt(true)->resize(500,);
		

    }
}
