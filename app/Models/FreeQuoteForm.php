<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreeQuoteForm extends Model
{
    protected $guarded = [];

    public function allServiceName(){
        return $this->belongsTo(AllServiceName::class);
    }
}
