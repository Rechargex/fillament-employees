<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'first_name',
        'middle_name',/** */
        'last_name',
        'birth_date',
        'age',
        'gender',
        'phone',
        'nationality',
        'address',
        // 'city_id',
        // 'state_id',
        // 'country_id',
        'department_id',
        'zip_code',
        'sss_id',
        'tin_id',
        'pagibig_id',
        'philhealth_id',
        'date_hired'
    ];
    /* public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    } */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
