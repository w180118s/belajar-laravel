<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','created_at','updated_at'
    ];
}
