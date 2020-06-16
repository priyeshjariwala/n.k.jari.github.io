<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class laces extends Model
{
    protected $table 	  = 'laces';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'name','image','price','usge','width','packaging_type','length','type','created_at','updated_at'
    ];
}
