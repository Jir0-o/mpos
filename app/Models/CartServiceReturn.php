<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartServiceReturn extends Model
{
    use HasFactory;
    protected $table = 'cart_service_returns';

    protected $primaryKey = 'service_return_id';



    protected $fillable = [

        'consumer_id',
        'consumer_name',
        'consumer_address',
        'job_number',
        'imei',
        'cart_id',
        'model_no',
        'warranty_card_no',
        'cart_item_id',
        'quantity',
        'reason_of_return',
        'purchase_date',
        'sending_date',
        'estimated_delivery_date',
        'delivery_date',

    ];
}
