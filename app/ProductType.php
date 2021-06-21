<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type_name
 * @property string $created_at
 * @property string $updated_at
 */
class ProductType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_types';
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';
    /**
     * @var array
     */
    protected $fillable = ['type_name', 'created_at', 'updated_at'];

    // 關聯 Product 表單
    public function linkProduct()
    {
        return $this->hasMany('App\Product','type_id','id');
    }
}
