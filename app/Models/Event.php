<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Event extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title','content', 'seo_title', 'meta_keywords', 'meta_description'];
}
