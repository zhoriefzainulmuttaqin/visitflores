<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscountCardUsed extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'discount_card_useds';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function card(){
        return $this->belongsTo(DiscountCard::class,'card_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
