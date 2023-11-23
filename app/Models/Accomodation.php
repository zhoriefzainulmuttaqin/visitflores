<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Accomodation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'accomodations';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function galleries(){
        return $this->hasMany(AccomodationGallery::class,'data_id','id');
    }
}
