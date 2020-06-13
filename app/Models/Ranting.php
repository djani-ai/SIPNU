<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Ranting extends Model
{
    public static $tableName = "ranting";

    public static $connection = "mysql";

    
	private $id_ranting;
	private $nama_ranting;
	private $sekretariat;
	private $nama_ketua;
	private $no_ketua;
	private $nama_sekretaris;
	private $no_sekretaris;
	private $no_sp;
	private $masa_aktif;
	private $sp;


    
	public function getIdRanting() {
		return $this->id_ranting;
	}

	public function setIdRanting($id_ranting) {
		$this->id_ranting = $id_ranting;
	}

	public static function findAllByNamaRanting($value) {
		return static::simpleQuery()->where('nama_ranting',$value)->get();
	}

	public static function findByNamaRanting($value) {
		return static::findBy('nama_ranting',$value);
	}

	public function getNamaRanting() {
		return $this->nama_ranting;
	}

	public function setNamaRanting($nama_ranting) {
		$this->nama_ranting = $nama_ranting;
	}

	public static function findAllBySekretariat($value) {
		return static::simpleQuery()->where('sekretariat',$value)->get();
	}

	public static function findBySekretariat($value) {
		return static::findBy('sekretariat',$value);
	}

	public function getSekretariat() {
		return $this->sekretariat;
	}

	public function setSekretariat($sekretariat) {
		$this->sekretariat = $sekretariat;
	}

	public static function findAllByNamaKetua($value) {
		return static::simpleQuery()->where('nama_ketua',$value)->get();
	}

	public static function findByNamaKetua($value) {
		return static::findBy('nama_ketua',$value);
	}

	public function getNamaKetua() {
		return $this->nama_ketua;
	}

	public function setNamaKetua($nama_ketua) {
		$this->nama_ketua = $nama_ketua;
	}

	public static function findAllByNoKetua($value) {
		return static::simpleQuery()->where('no_ketua',$value)->get();
	}

	public static function findByNoKetua($value) {
		return static::findBy('no_ketua',$value);
	}

	public function getNoKetua() {
		return $this->no_ketua;
	}

	public function setNoKetua($no_ketua) {
		$this->no_ketua = $no_ketua;
	}

	public static function findAllByNamaSekretaris($value) {
		return static::simpleQuery()->where('nama_sekretaris',$value)->get();
	}

	public static function findByNamaSekretaris($value) {
		return static::findBy('nama_sekretaris',$value);
	}

	public function getNamaSekretaris() {
		return $this->nama_sekretaris;
	}

	public function setNamaSekretaris($nama_sekretaris) {
		$this->nama_sekretaris = $nama_sekretaris;
	}

	public static function findAllByNoSekretaris($value) {
		return static::simpleQuery()->where('no_sekretaris',$value)->get();
	}

	public static function findByNoSekretaris($value) {
		return static::findBy('no_sekretaris',$value);
	}

	public function getNoSekretaris() {
		return $this->no_sekretaris;
	}

	public function setNoSekretaris($no_sekretaris) {
		$this->no_sekretaris = $no_sekretaris;
	}

	public static function findAllByNoSp($value) {
		return static::simpleQuery()->where('no_sp',$value)->get();
	}

	public static function findByNoSp($value) {
		return static::findBy('no_sp',$value);
	}

	public function getNoSp() {
		return $this->no_sp;
	}

	public function setNoSp($no_sp) {
		$this->no_sp = $no_sp;
	}

	public static function findAllByMasaAktif($value) {
		return static::simpleQuery()->where('masa_aktif',$value)->get();
	}

	public static function findByMasaAktif($value) {
		return static::findBy('masa_aktif',$value);
	}

	public function getMasaAktif() {
		return $this->masa_aktif;
	}

	public function setMasaAktif($masa_aktif) {
		$this->masa_aktif = $masa_aktif;
	}

	public static function findAllBySp($value) {
		return static::simpleQuery()->where('sp',$value)->get();
	}

	public static function findBySp($value) {
		return static::findBy('sp',$value);
	}

	public function getSp() {
		return $this->sp;
	}

	public function setSp($sp) {
		$this->sp = $sp;
	}


}