<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMasterUserController extends CBController {


    public function cbInit()
    {
        $this->setTable("users");
        $this->setPermalink("master_user");
        $this->setPageTitle("Master User");

        $this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addDatetime("Email Verified At","email_verified_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addPassword("Password","password")->showIndex(false);
		$this->addText("Remember Token","remember_token")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addDatetime("Created At","created_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		$this->addImage("Photo","photo")->showIndex(false)->encrypt(true);
		$this->addSelectTable("Cb Role","cb_roles_id",["table"=>"cb_roles","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addText("Ip Address","ip_address")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addText("User Agent","user_agent")->required(false)->showIndex(false)->showAdd(false)->showEdit(false)->strLimit(150)->maxLength(255);
		$this->addDatetime("Login At","login_at")->required(false)->showIndex(false)->showAdd(false)->showEdit(false);
		

    }
}
