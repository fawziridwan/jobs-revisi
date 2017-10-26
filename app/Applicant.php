<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
	    'user_id', 'name', 'email', 'contact', 'address', 'file', 'status'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
