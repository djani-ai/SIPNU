<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminProfilRantingController extends CBController {


    public function cbInit()
    {
        $this->setTable("ranting");
        $this->setPermalink("profil_ranting");
        $this->setPageTitle("Profil Ranting");

        $this->addText("Nama Ranting","nama_ranting")->readonly();
		$this->addTextArea("Sekretariat","sekretariat")->strLimit(150);
		$this->addText("Nama Ketua","nama_ketua")->strLimit(150)->maxLength(255);
		$this->addText("No Ketua","no_ketua")->strLimit(150)->maxLength(255);
		$this->addText("Nama Sekretaris","nama_sekretaris")->strLimit(150)->maxLength(255);
		$this->addText("Nomor HP Sekretaris","no_sekretaris")->strLimit(150)->maxLength(255);
		$this->addText("Nomor SP","no_sp")->showIndex(false)->strLimit(150)->maxLength(255);
		$this->addDate("Masa Aktif","masa_aktif")->showIndex(false);
		$this->addImage("Upload SP","sp")->required(false)->showIndex(false)->encrypt(true);
		
		//query Data ID Ranting
		$this->hookIndexQuery(function($query) {
		$query->where("id_ranting", cb()->session()->id());
		return $query;
	});
    }
}
