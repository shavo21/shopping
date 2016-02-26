<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','count','price','type_id','product_picture1','product_picture2','product_picture3'];

    public function type()
    {
        return $this->belongsTo('App\Type','type_id');
    }
}
