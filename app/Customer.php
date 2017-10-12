<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $with = ['sites'];

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function path()
    {
        return '/customers/' . $this->id;
    }
}
