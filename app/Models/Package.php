<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'packages';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
