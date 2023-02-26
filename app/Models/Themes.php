<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;

    protected $table = 'themes';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'type',
        'url'
    ];
}
