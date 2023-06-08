<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'is_active',
    ];
}
