<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $order_no
 * @property string $name
 * @property string $county
 * @property string $district
 * @property string $zipcode
 * @property string $address
 * @property int $price
 * @property int $is_paid
 * @property string $created_at
 * @property string $updated_at
 */
class DonateCashData extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'donate_cash_data';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'order_no', 'name', 'county', 'district', 'zipcode', 'address', 'price', 'is_paid', 'created_at', 'updated_at'];

}
