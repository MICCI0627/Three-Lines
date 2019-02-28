<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = ['id', 'url', 'text1', 'text2', 'text3'];
}
