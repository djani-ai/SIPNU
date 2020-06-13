<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPengkaderanController extends CBController {


    public function cbInit()
    {
        $this->setTable("kader");
        $this->setPermalink("pengkaderan");
        $this->setPageTitle("Pengkaderan");

        $this->addText("Nama","nama")->strLimit(150)->maxLength(255);
		$this->addCheckbox("Kaderisasi","Kaderisasi")->options([1=>'Makesta',2=>'Lakmud',3=>'Lakut',4=>'Diklatama',5=>'Diklatmad',6=>'Diklatnas']);	

    }
}
