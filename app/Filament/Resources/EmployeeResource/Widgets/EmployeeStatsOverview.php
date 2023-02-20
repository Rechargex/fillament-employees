<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $us = Country::where('country_code', 'US')->withCount('employees')->first();
        $ph = Country::where('country_code', 'PH')->withCount('employees')->first();
        $react = Department::where('name', 'React')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make('US Employees', $us ? $us->employees_count : 0),
            Card::make('PH Employees', $ph ? $ph->employees_count : 0),
            Card::make('React Employees', $react ? $react->employees_count : 0),
        ];
    }
}
