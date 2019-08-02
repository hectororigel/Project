<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redcem extends Model
{
    protected $table = 'redcem';

    protected $fillable =
        [
            'owner_id','name', 'lastName',
            'email', 'phoneNumber'
            ,'message'

        ];

    public function owner(){

      return $this->belongsTo(User::class);
    }
}
