<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
    protected $table = "kader";

    protected $fillable = ['nama','jabatan','tp_lahir','tgl_lahir','alamat','id_sekol','id_rant'];
}