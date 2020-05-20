<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapy extends Model
{
    //
    protected $guarded = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function postures()
    {
        return $this->belongsToMany(Posture::class,'therapy_posture');
    }
}
