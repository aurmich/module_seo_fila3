<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * @see SnapshotResource
 */
class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;

    

    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            'aggregate_uuid' => TextColumn::make('aggregate_uuid')
                ->searchable()
                ->sortable()
                ->wrap()
                ->label('Aggregate UUID'),

            'aggregate_version' => TextColumn::make('aggregate_version')
                ->numeric()
                ->sortable()
                ->label('Aggregate Version'),

            'state' => ViewColumn::make('state')
                ->view($view)
                ->label('State'),

            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->label('Created At'),

            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->label('Updated At'),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('aggregate_uuid')
                ->options(fn () => SnapshotResource::getModel()::distinct()->pluck('aggregate_uuid', 'aggregate_uuid')->toArray()),
        ];
    }

    public function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

}
