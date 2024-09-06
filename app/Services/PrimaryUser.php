<?php

namespace App\Services;

use App\Models\User;
use App\Traits\Makeable;

class PrimaryUser
{
    use Makeable;

    public static function retrieve()
    {
        return User::where('primary', true)->first();
    }
}
