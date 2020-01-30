<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    //association of customer to company
    public function customers(){

        return $this->hasMany(Customer::class);

    }
}
