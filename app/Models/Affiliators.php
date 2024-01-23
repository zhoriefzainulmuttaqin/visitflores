<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Affiliators extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'affiliators';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
}
