<?php namespace App\Services;

use App\Contracts\MediaInterface;
use App\Media;

class MediaService implements MediaInterface{

	/**
	 * Object of Media class.
	 *
	 * @var Media
	 */
	private $media;

	/**
	 * Create a new instance of MediaService class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->media = new Media();
	}

	/**
	 * Get List of all medias.
	 *
	 * @return Collection
	 */
	public function getAll()
	{
		$medias = $this->media;
		return $medias->paginate(1);
	}

	/**
	 * Get List of all medias.
	 *
	 * @return Collection
	 */
	public function getList()
	{
		$medias = $this->media->get();
		return $medias;
	}

	/**
	 * Get one media.
	 *
	 * @return Collection
	 */
	public function getOne($id)
	{
		$media  = $this->media->find($id);
		return $media;
	}

	/**
	 * Get create new media.
	 *
	 * @return Collection
	 */
	public function create($data)
	{
		$media = $this->media->create($data);
		return $media;
	}

	/**
	 * Get edit media data.
	 *
	 * @return response
	 */
	public function update($data,$id)
	{
		$result = $this->getOne($id)->update($data);
		return $result;
	}

	/**
	 * Get remove one media.
	 *
	 * @return response
	 */
	public function remove($id)
	{
		$result = $this->getOne($id)->delete();
		return $result;
	}
}