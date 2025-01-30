<?php

namespace App\Filament\Resources\BonusResource\Pages;

use App\Filament\Resources\BonusResource;
use Filament\Actions;
use FIlament\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateBonus extends CreateRecord
{
    protected static string $resource = BonusResource::class;
}