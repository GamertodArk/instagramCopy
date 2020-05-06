<?php

namespace App;
// use User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/o2cPkDEYfHwEbCMrkIVDs8zBV3KcFw3giKQx09qf.png';
        return "/storage/" . $imagePath;
    }

    /**
    * Add a reletion between the profile table and the users table
    *
    * @return object
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

}
