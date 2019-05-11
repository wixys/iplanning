<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function ranks() {
    	return $this->belongsTo(Rank::class);
    }
}
