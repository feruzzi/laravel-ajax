<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_instansi";
    protected $guarded = [
        'id',
    ];
}
