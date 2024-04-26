<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    
    protected $table='pelanggans';

    public $primaryKey = 'PelangganID';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $guarded = [''];

}
