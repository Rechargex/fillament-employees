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
        
        $frontOffice = Department::where('name', 'Front Office')->withCount('employees')->first();
        $accounts = Department::where('name', 'Accounts')->withCount('employees')->first();
        $food = Department::where('name', 'Food & Beverages')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            
            Card::make('Front Office Employees', $frontOffice ? $frontOffice->employees_count : 0),
            Card::make('Accounts Employees', $accounts ? $accounts->employees_count : 0),
            Card::make('Food & Beverages Employees', $food ? $food->employees_count : 0),
        ];
    }
}
