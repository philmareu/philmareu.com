<?php

namespace App\Models;

use App\Enums\ProjectTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => ProjectTypes::class,
    ];

    public function technologies()
    {
        return $this->belongsToMany(
            Technology::class,
        );
    }
}
