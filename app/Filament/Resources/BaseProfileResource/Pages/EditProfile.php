<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\BaseProfileResource\Pages;

use Modules\User\Filament\Resources\BaseProfileResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditProfile extends XotBaseEditRecord
=======

class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 8501391d (up)
{
    protected static string $resource = BaseProfileResource::class;
}
