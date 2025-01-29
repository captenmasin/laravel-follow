<?php

namespace Tests;

use Illuminate\Database\Eloquent\Model;
use Captenmasin\LaravelFollow\Traits\Followable;
use Captenmasin\LaravelFollow\Traits\Follower;

class User extends Model
{
    use Followable;
    use Follower;

    protected $fillable = ['name', 'private'];

    protected $casts = [
        'private' => 'boolean',
    ];

    public function needsToApproveFollowRequests(): bool
    {
        return $this->private ?? false;
    }
}
