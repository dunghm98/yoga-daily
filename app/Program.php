<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    //
    protected $guarded = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function postures()
    {
        return $this->belongsToMany(Posture::class,'program_posture');
    }

    public function setPosture(array $ids = [])
    {
        $this->postures()->sync($ids);
    }
}
