<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";
    protected $guarded = [];

    public function question(){
        return $this->belongsTo('App\Question','question_id');   
    }

    public function users(){
        return $this->belongsToMany('App\User','answer_has_users','answer_id','user_id')->withPivot('poin');
    }
}
