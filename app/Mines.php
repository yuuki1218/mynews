<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mines extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'creaters_id'=>'required',
        'edited_id'=>'required',
        );
}
