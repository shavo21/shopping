<?php namespace App\Services;

use App\Contracts\ProductInterface;
use App\Product;

class ProductService implements ProductInterface{

	/**
	 * Object of Product class.
	 *
	 * @var Product
	 */
	private $product;

	/**
	 * Create a new instance of ProductService class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->product = new Product();
	}

	/**
	 * Get List of all products.
	 *
	 * @return Collection
	 */
	public function getAll()
	{
		$products = $this->product;
		return $products->paginate(1);
	}

	public function getList()
	{
		$products = $this->product->get();
		return $products;
	}

	public function getOne($id)
	{
		$product  = $this->product->find($id);
		return $product;
	}

	public function create($data)
	{
		$product = $this->product->create($data);
		return $product;
	}

	public function update($data,$id)
	{
		$result = $this->getOne($id)->update($data);
		return $result;
	}

	public function remove($id)
	{
		$result = $this->getOne($id)->delete();
		return $result;
	}
}