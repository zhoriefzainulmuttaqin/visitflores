<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCardUsed extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'discount_card_useds';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
