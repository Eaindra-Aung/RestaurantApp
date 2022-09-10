<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'table_id',
        'date',
        'guest_number'
    ];

    
    protected $dates = [
        'date'
    ];



    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
