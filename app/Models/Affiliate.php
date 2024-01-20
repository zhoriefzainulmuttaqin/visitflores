<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'affiliate';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
