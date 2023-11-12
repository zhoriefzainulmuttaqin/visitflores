<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscountCardSale extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'discount_card_sales';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
