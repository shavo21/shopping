<?php namespace App\Contracts;

interface MediaInterface{

	/**
	 * Get List of all medias.
	 *
	 * @return Collection
	 */
	public function getAll();

	/**
	 * Get List of all medias.
	 *
	 * @return Collection
	 */
	public function getList();

	/**
	 * Get one media.
	 *
	 * @return Collection
	 */
	public function getOne($id);

	/**
	 * Get create new media.
	 *
	 * @return Collection
	 */
	public function create($data);

	/**
	 * Get edit media data.
	 *
	 * @return response
	 */
	public function update($data,$id);

	/**
	 * Get remove one media.
	 *
	 * @return response
	 */
	public function remove($id);

}