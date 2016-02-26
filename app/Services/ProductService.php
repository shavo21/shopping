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
		$products = $this->product->with('type');
		return $products->paginate(1);
	}

	/**
	 * Get List of all products.
	 *
	 * @return Collection
	 */
	public function getList()
	{
		$products = $this->product->get();
		return $products;
	}

	/**
	 * Get one product.
	 *
	 * @return Collection
	 */
	public function getOne($id)
	{
		$product  = $this->product->with('type')->find($id);
		return $product;
	}

	/**
	 * Get create new product.
	 *
	 * @return Collection
	 */
	public function create($data)
	{
		$product = $this->product->create($data);
		return $product;
	}

	/**
	 * Get edit product data.
	 *
	 * @return response
	 */
	public function update($data,$id)
	{
		$result = $this->getOne($id)->update($data);
		return $result;
	}

	/**
	 * Get remove one product.
	 *
	 * @return response
	 */
	public function remove($id)
	{
		$result = $this->getOne($id)->delete();
		return $result;
	}
}