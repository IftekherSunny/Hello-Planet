<?php

namespace Sun\Models;

use Sun\Database\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];

    /**
     * Create dummy message
     */
    public static function dummy()
    {
        if(static::count() < 5) {
            static::create([
                'title' => 'Planet',
                'body' => "I'm a PHP Framework"
            ]);
        }
    }
}