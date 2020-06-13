<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMasterJabatanController extends CBController {


    public function cbInit()
    {
        $this->setTable("jabatan");
        $this->setPermalink("master_jabatan");
        $this->setPageTitle("Master Jabatan");

        $this->addText("Nama Jabatan","nama_jabatan")->strLimit(150)->maxLength(255);
		

    }
}
