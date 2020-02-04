<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_home extends Model
{
    protected $table = "tb_home";
 
    protected $fillable = ['title_banner','file','description','status'];

    public $timestamps = false;
}
