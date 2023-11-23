<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tours';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
