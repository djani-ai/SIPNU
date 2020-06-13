<?php

namespace App\Http\Controllers\crocodicstudio\crudbooster\controllers;

use Illuminate\Http\Request;

class TesController extends controller
{
    public function getIndex() {
        $data = [];
        $data['page_title'] = "Dashboard";
        return view("dashboard", $data);
}
}