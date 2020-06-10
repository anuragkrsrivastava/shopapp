<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    public $table = 'pages';
    public $primaryKey = 'id';
    public $timestamps = true;
}
