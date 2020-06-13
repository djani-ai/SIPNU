<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Jabatan extends Model
{
    public static $tableName = "jabatan";

    public static $connection = "mysql";

    
	private $id;
	private $nama_jabatan;


    
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByNamaJabatan($value) {
		return static::simpleQuery()->where('nama_jabatan',$value)->get();
	}

	public static function findByNamaJabatan($value) {
		return static::findBy('nama_jabatan',$value);
	}

	public function getNamaJabatan() {
		return $this->nama_jabatan;
	}

	public function setNamaJabatan($nama_jabatan) {
		$this->nama_jabatan = $nama_jabatan;
	}


}