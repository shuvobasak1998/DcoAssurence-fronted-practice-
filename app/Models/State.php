<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function entity()
    {
        return $this->belongsTo(EntityType::class,'entity_id','id');
    }

}
