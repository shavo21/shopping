<?php namespace App\Contracts;

interface TypeInterface{

	public function getAll();
	public function getList();
	public function getOne($id);
	public function create($data);
	public function update($data,$id);
	public function remove($id);

}