<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $type_id
 * @property string $name
 * @property integer $price
 * @property string $description
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'products';
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';
    /**
     * @var array
     */
    protected $fillable = ['type_id', 'name', 'price', 'description', 'img', 'created_at', 'updated_at'];


    // 關聯 ProductType 表單
    public function linkProductType()
     {
        return $this->hasOne('App\ProductType','id','type_id');
     }

    // 關聯 ProductImg 表單
    public function linkProductImg()
     {
        return $this->hasMany('App\ProductImg','product_id','id');
     }

}
