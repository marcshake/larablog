<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Music
 *
 * @package App
 */
class Music extends Model
{
    /**
     * @var string
     */
    protected $table = 'music';
    /**
     * @var string
     */
    protected $primaryKey = "song_id";
}
