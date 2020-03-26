<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Git extends Model{
    protected $table='gits';
    protected $fillable=['git'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
