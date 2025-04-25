<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryImei extends Model
{
    use HasFactory;
    protected $table = 'temporary_imei';
    protected $primaryKey = 'imei_id';
    public $timestamps = false;

    protected $fillable = [
        'imei',
        'product_id',
        'camera',
        'rom',
        'ram',
        'color'
    ];
}
