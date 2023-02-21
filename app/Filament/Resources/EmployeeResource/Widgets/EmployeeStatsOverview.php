<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

// use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        // $us = Country::where('country_code', 'US')->withCount('employees')->first();
        // $ph = Country::where('country_code', 'PH')->withCount('employees')->first();
        $reactjs = Department::where('name', 'ReactJs')->withCount('employees')->first();
        $vuejs = Department::where('name', 'Vuejs')->withCount('employees')->first();
        $laravel = Department::where('name', 'Laravel')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            // Card::make('US Employees', $us ? $us->employees_count : 0),
            // Card::make('PH Employees', $ph ? $ph->employees_count : 0),
            Card::make('React Employees', $reactjs ? $reactjs->employees_count : 0),
            Card::make('Vues Employees', $vuejs ? $vuejs->employees_count : 0),
            Card::make('Laravel Employees', $laravel ? $laravel->employees_count : 0),
        ];
    }
}
