<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table='admins';

    public $primaryKey = 'AdminID';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $guarded = [''];
}
