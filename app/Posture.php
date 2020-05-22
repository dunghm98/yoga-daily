<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posture extends Model
{
    //
    protected $guarded = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function therapies()
    {
        return $this->belongsToMany(Therapy::class,'therapy_posture');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function programs()
    {
        return $this->belongsToMany(Program::class,'program_posture');
    }
    public function setTherapy(array $ids = [])
    {
        $this->therapies()->sync($ids);
    }
}
