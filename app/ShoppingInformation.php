<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingInformation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shopping_information';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','product_id','price','shopping'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
