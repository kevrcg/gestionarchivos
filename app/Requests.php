<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ["ruta", "user_id"];
    protected $table = "requests";
}