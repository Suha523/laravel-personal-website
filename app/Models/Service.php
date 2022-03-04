<?php

namespace App\Models;

use App\Models\Portfolio;


use App\Models\SubServices;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $fillable = array('name','status');


    public function sub_service(){
        return $this->hasMany(SubServices::class);
    }

    public function portfolio(){
        return $this->hasMany(Portfolio::class);
    }
}
