<?php

namespace App\Filament\Resources\HobbyPostResource\Pages;

use App\Filament\Resources\HobbyPostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHobbyPost extends CreateRecord
{
    protected static string $resource = HobbyPostResource::class;
}
