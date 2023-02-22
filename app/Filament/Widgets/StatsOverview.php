<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
            $react = Department::where('name', 'React')->withCount('employees')->first();
        $vues = Department::where('name', 'Vues')->withCount('employees')->first();
        $laravel = Department::where('name', 'Laravel')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            // Card::make('US Employees', $us ? $us->employees_count : 0),
            // Card::make('PH Employees', $ph ? $ph->employees_count : 0),
            Card::make('React Employees', $react ? $react->employees_count : 0),
            Card::make('Vues Employees', $vues ? $vues->employees_count : 0),
            Card::make('Laravel Employees', $laravel ? $laravel->employees_count : 0),
        ];
    }
}
