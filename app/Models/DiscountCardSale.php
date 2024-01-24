<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function cards(){
        return $this->hasMany(DiscountCard::class,'sale_id','id');
    }
    public function affiliators(){
        return $this->belongsTo(Affiliators::class,'code_reff','code_reff');
    }
}
