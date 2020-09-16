<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'salary', 'location', 'country'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('status');
    }
}
