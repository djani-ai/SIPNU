<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminDataRantingController extends CBController {


    public function cbInit()
    {
        $this->setTable("ranting");
        $this->setPermalink("data_ranting");
        $this->setPageTitle("Data Ranting");

        $this->addText("Nama Ranting","nama_ranting")->strLimit(150)->maxLength(255);
		$this->addTextArea("Sekretariat","sekretariat")->strLimit(150);
		$this->addText("Nama Ketua","nama_ketua")->strLimit(150)->maxLength(255);
		$this->addText("No Ketua","no_ketua")->strLimit(150)->maxLength(255);
		$this->addText("Nama Sekretaris","nama_sekretaris")->strLimit(150)->maxLength(255);
		$this->addText("Nomor HP Sekretaris","no_sekretaris")->strLimit(150)->maxLength(255);
		$this->addText("Nomor SP","no_sp")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addDate("Masa Aktif","masa_aktif")->showIndex(false);
		$this->addImage("Upload SP","sp")->required(false)->showIndex(false)->encrypt(true);
		
    }
}
