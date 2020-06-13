<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Kader extends Model
{
    public static $tableName = "kader";
    public static $connection = "mysql";

    
	private $id;
	private $nama;
	private $jabatan;
	private $tp_lahir;
	private $tgl_lahir;
	private $alamat;
	private $id_sekol;
	private $id_rant;
	private $foto;


    
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

	public static function findAllByJabatan($value) {
		return static::simpleQuery()->where('jabatan',$value)->get();
	}

	public static function findByJabatan($value) {
		return static::findBy('jabatan',$value);
	}

	public function getJabatan() {
		return $this->jabatan;
	}

	public function setJabatan($jabatan) {
		$this->jabatan = $jabatan;
	}

	public static function findAllByTpLahir($value) {
		return static::simpleQuery()->where('tp_lahir',$value)->get();
	}

	public static function findByTpLahir($value) {
		return static::findBy('tp_lahir',$value);
	}

	public function getTpLahir() {
		return $this->tp_lahir;
	}

	public function setTpLahir($tp_lahir) {
		$this->tp_lahir = $tp_lahir;
	}

	public static function findAllByTglLahir($value) {
		return static::simpleQuery()->where('tgl_lahir',$value)->get();
	}

	public static function findByTglLahir($value) {
		return static::findBy('tgl_lahir',$value);
	}

	public function getTglLahir() {
		return $this->tgl_lahir;
	}

	public function setTglLahir($tgl_lahir) {
		$this->tgl_lahir = $tgl_lahir;
	}

	public static function findAllByAlamat($value) {
		return static::simpleQuery()->where('alamat',$value)->get();
	}

	public static function findByAlamat($value) {
		return static::findBy('alamat',$value);
	}

	public function getAlamat() {
		return $this->alamat;
	}

	public function setAlamat($alamat) {
		$this->alamat = $alamat;
	}

	public static function findAllByIdSekol($value) {
		return static::simpleQuery()->where('id_sekol',$value)->get();
	}

	public static function findByIdSekol($value) {
		return static::findBy('id_sekol',$value);
	}

	public function getIdSekol() {
		return $this->id_sekol;
	}

	public function setIdSekol($id_sekol) {
		$this->id_sekol = $id_sekol;
	}

	public static function findAllByIdRant($value) {
		return static::simpleQuery()->where('id_rant',$value)->get();
	}

	public static function findByIdRant($value) {
		return static::findBy('id_rant',$value);
	}

	public function getIdRant() {
		return $this->id_rant;
	}

	public function setIdRant($id_rant) {
		$this->id_rant = $id_rant;
	}

	public static function findAllByFoto($value) {
		return static::simpleQuery()->where('foto',$value)->get();
	}

	public static function findByFoto($value) {
		return static::findBy('foto',$value);
	}

	public function getFoto() {
		return $this->foto;
	}

	public function setFoto($foto) {
		$this->foto = $foto;
	}


}