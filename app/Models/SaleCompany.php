<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleCompany extends Model
{
    use HasFactory;
    protected $table = 'sale_companies';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
