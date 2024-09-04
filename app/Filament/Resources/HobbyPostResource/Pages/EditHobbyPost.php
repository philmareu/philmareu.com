<?php

namespace App\Filament\Resources\HobbyPostResource\Pages;

use App\Filament\Resources\HobbyPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHobbyPost extends EditRecord
{
    protected static string $resource = HobbyPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
