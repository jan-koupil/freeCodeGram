<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    /**
     * @return string
     */
    public function profileImage()
    {
        $imagePath =  ($this->image) ? $this->image : 'No_image_available.svg';
        return "/storage/$imagePath";
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
}
