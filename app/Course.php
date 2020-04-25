<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function collections()
    {
        return $this->belongsToMany(Collection::class,'course_collection');
    }
//favorite course
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function setCollection(array $ids = [])
    {
        $this->collections()->sync($ids);
    }

    public function getTotalEnergy()
    {
        $totalEnergy = 0;
        foreach($this->lectures as $lesson){
            $totalEnergy += $lesson->energy;
        }
        return $totalEnergy;
    }

    public function countLesson()
    {
        return ($this->lectures()->count());
    }

    public function getThumbnail()
    {
        $url = $this->link_intro_video;
        $videoId = $this->getVideoId($url);
        $image = 'https://img.youtube.com/vi/'.$videoId.'/maxresdefault.jpg';
        return $image;
    }

    public function getEmbedVideo()
    {
        $url = $this->link_intro_video;
        $videoId = $this->getVideoId($url);
        return 'https://www.youtube.com/embed/'.$videoId;
    }

    public function getVideoId($url)
    {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
        return implode($matches);
    }
}
