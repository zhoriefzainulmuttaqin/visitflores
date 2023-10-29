<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GiftSaleItem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gift_sale_items';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function gift(){
        return $this->belongsTo(Gift::class,'gift_id','id');
    }
}
