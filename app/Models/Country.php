<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model implements TranslatableContract
{
    use Translatable, HasFactory, SoftDeletes;

    protected $fillable = ['id', 'code', 'phone_length'];
    public $translatedAttributes = ['name'];

}
