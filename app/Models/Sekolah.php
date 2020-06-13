<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Sekolah extends Model
{
    public static $tableName = "sekolah";

    public static $connection = "mysql";

    
	private $id_sekolah;
	private $jenjang;


    
	public function getIdSekolah() {
		return $this->id_sekolah;
	}

	public function setIdSekolah($id_sekolah) {
		$this->id_sekolah = $id_sekolah;
	}

	public static function findAllByJenjang($value) {
		return static::simpleQuery()->where('jenjang',$value)->get();
	}

	public static function findByJenjang($value) {
		return static::findBy('jenjang',$value);
	}

	public function getJenjang() {
		return $this->jenjang;
	}

	public function setJenjang($jenjang) {
		$this->jenjang = $jenjang;
	}


}