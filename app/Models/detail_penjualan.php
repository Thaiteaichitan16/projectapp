<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;

    protected $table='detail_penjualans';

    public $primaryKey = 'DetailID';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $guarded = [''];
}
