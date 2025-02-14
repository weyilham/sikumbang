<?php

namespace App\Filament\Widgets;

use App\Models\Answer;
use App\Models\Children;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ChildrenStats extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';
    protected function getStats(): array
    {
        $total_children = \App\Models\Answer::distinct('children_id')->count('children_id');

       

        return [
            //
            Stat::make('Total Children', Children::count())
            ->description('New Children Registered')
            ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
            ->chart([
                1,3,5,10,20,30,40
            ])
            ->color('success'),
            Stat::make('Total Answers', $total_children)
            ->description('Answers Given')
            ->descriptionIcon('heroicon-m-chart-bar', IconPosition::Before)
            ->chart([7, 2, 2, 3, 15, 4, 17])
            ->color('info'),
            Stat::make('Unique views', '12k')
            ->description('3k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('warning'),
        ];
    }
}
