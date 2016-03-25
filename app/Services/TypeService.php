<?php namespace App\Services;

use App\Contracts\TypeInterface;
use App\Type;

class TypeService implements TypeInterface{

	/**
	 * Object of Type class.
	 *
	 * @var User
	 */
	private $user;

	/**
	 * Create a new instance of TypeService class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->type = new Type();
	}

	/**
	 * Get List of all types.
	 *
	 * @return Collection
	 */
	public function getAll()
	{
		$types = $this->type;
		return $types->paginate(1);
	}

	/**
	 * Get List of all types.
	 *
	 * @return Collection
	 */
	public function getList()
	{
		$types = $this->type->get();
		return $types;
	}

	/**
	 * Get one type.
	 *
	 * @return Collection
	 */
	public function getOne($id)
	{
		$type  = $this->type->find($id);
		return $type;
	}

	/**
	 * Get create new type.
	 *
	 * @return Collection
	 */
	public function create($data)
	{
		$type = $this->type->create($data);
		return $type;
	}

	/**
	 * Get edit type data.
	 *
	 * @return response
	 */
	public function update($data,$id)
	{
		$result = $this->getOne($id)->update($data);
		return $result;
	}

	/**
	 * Get remove one type.
	 *
	 * @return response
	 */
	public function remove($id)
	{
		$result = $this->getOne($id)->delete();
		return $result;
	}

	/**
	* Get types by id.
	*
	* @return types
	*/
	public function getTypes($limit)
	{
		$result = $this->type->orderBy('id', 'desc')->limit($limit)->get();
		return $result;
	}
}