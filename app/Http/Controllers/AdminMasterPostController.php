<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMasterPostController extends CBController {


    public function cbInit()
    {
        $this->setTable("post");
        $this->setPermalink("master_post");
        $this->setPageTitle("Master Post");

        $this->addText("Judul","judul")->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Text","text")->strLimit(150);
		

    }
}
