<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public static function get_option($key)
    {
        $config = static::where('option_code', $key)->first();

        if (!is_null($config)) {
            return $config->option_value;
        }

        return null;
    }
}
