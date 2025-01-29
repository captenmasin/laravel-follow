<?php

namespace Tests;

use Illuminate\Database\Eloquent\Model;
use Captenmasin\LaravelFollow\Traits\Followable;

class Channel extends Model
{
    use Followable;

    protected $fillable = ['name'];
}
