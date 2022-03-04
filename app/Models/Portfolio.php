<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title'];
    protected $fillable = array('title','link','thumbnail','service_id');

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
