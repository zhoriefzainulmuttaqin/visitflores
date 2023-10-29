<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GiftSale extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gift_sales';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function items(){
        return $this->hasMany(GiftSaleItem::class,'sale_id','id');
    }
}
