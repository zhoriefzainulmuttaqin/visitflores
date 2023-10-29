<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageSale extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'package_sales';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
