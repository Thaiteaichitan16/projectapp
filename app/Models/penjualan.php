<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    
    protected $table='penjualans';

    public $primaryKey = 'PenjualanID';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $guarded = [''];
}
