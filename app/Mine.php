<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'creaters_id'=>'required',
        'edited_at'=>'required',
        'profile_id'=>'required',
        
        );
}
