<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMasterSekolahController extends CBController {


    public function cbInit()
    {
        $this->setTable("sekolah");
        $this->setPermalink("master_sekolah");
        $this->setPageTitle("Master Sekolah");

        $this->addText("Jenjang","jenjang")->strLimit(150)->maxLength(255);
		

    }
}
