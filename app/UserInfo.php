<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable=['bio'];
    public function AdditionalInfos()
    {
        return $this->belongsTo('App\User')->withDefault();
    }
}
