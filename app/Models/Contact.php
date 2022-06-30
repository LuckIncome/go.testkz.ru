<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Contact extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['translate_value'];

    public function getWebpImageAttribute()
    {
        return str_replace('.' . pathinfo(\Voyager::image($this->image),PATHINFO_EXTENSION), '.webp', \Voyager::image($this->image));
    }   
}
