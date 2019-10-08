<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $table='adds';
    public $primaryKey='id';
    public $timestamps=true;
}
