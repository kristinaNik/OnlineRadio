<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadioPlayer extends Model
{
   protected $fillable = [
       'title', 'album', 'duration', 'next'
   ];
}
