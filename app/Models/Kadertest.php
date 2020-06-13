<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Kadertest extends Model
{
    public static $tableName = "kadertest";

    public static $connection = "mysql";

    
	private $id;
	private $nama;
	private $id_sek;


    
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByNama($value) {
		return static::simpleQuery()->where('nama',$value)->get();
	}

	public static function findByNama($value) {
		return static::findBy('nama',$value);
	}

	public function getNama() {
		return $this->nama;
	}

	public function setNama($nama) {
		$this->nama = $nama;
	}

	public static function findAllByIdSek($value) {
		return static::simpleQuery()->where('id_sek',$value)->get();
	}

	public static function findByIdSek($value) {
		return static::findBy('id_sek',$value);
	}

	public function getIdSek() {
		return $this->id_sek;
	}

	public function setIdSek($id_sek) {
		$this->id_sek = $id_sek;
	}


}