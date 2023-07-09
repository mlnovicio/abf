<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowersLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'control_no',
        'date_borrowed',
        'date_return_plan',
        'loc_for_use',
        'lent_by',
        'purpose',
    ];
}
