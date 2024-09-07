<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProjectTypes: string implements HasLabel
{
    case WEBSITE = 'Website';
    case WEB_APP = 'Web App';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
