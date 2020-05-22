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
    public function getThumbnail()
    {
        $url = $this->video;
        $videoId = $this->getVideoId($url);
        $image = 'https://img.youtube.com/vi/'.$videoId.'/maxresdefault.jpg';
        return $image;
    }

    public function getVideoId($url)
    {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
        return implode($matches);
    }

    public function getEmbedVideo()
    {
        $url = $this->video;
        $videoId = $this->getVideoId($url);
        return 'https://www.youtube.com/embed/'.$videoId;
    }
}
