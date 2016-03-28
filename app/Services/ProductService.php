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
		return $products->paginate(5);
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
		$product  = $this->product->with('type')->with('type')->find($id);
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

	/**
	 * Get products by type_id.
	 *
	 * @return products
	 */
	public function getProductByeType($id)
	{
		$products = $this->product->where('type_id',$id)->with('type')->get();
		return $products;
	}

	/**
	 * Get products order by id desc.
	 *
	 * @return products
	 */
	public function getProductSlide($limit)
	{
		$products = $this->product->orderBy('id', 'desc')->with('type')->limit($limit)->get();
		return $products;
	}

	/**
	* Get products by new_price.
	*
	* @return products
	*/
	public function getProductByPrice($limit)
	{
		$products = $this->product->orderBy('id', 'desc')->where('new_price','!=','')->with('type')->limit($limit)->get();
		return $products;
	}

	/**
	* Get products by price.
	*
	* @return products
	*/
	public function getProductMain($limit)
	{
		$products = $this->product->orderBy('id', 'desc')->where('new_price','')->with('type')->limit($limit)->get();
		return $products;
	}

	/**
	* Get products group.
	*
	* @param $id integer
	* @return products
	*/
	public function getProductByType($id)
	{
		$products = $this->product->where('type_id',$id)->get();
		return $products;
	}

	/**
	* Get products by count.
	*
	* @param $count,$limot integer
	* @return products
	*/
	public function getProductByCount($count,$limit)
	{
		$products = $this->product->where('count','<',$count)->limit($limit)->get();
		return $products;
	}
}