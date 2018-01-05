<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestIT extends Model
{
    protected $table = 'requests';

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
