<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Const\Prefecture;

class Furniture extends Model
{
    use HasFactory;
    protected $table = 'funitures';
}
