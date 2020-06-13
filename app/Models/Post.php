<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Post extends Model
{
    public static $tableName = "post";

    public static $connection = "mysql";

    
	private $id;
	private $judul;
	private $text;


    
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByJudul($value) {
		return static::simpleQuery()->where('judul',$value)->get();
	}

	public static function findByJudul($value) {
		return static::findBy('judul',$value);
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public static function findAllByText($value) {
		return static::simpleQuery()->where('text',$value)->get();
	}

	public static function findByText($value) {
		return static::findBy('text',$value);
	}

	public function getText() {
		return $this->text;
	}

	public function setText($text) {
		$this->text = $text;
	}


}