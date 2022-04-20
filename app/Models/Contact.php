<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Data sudah dari database
class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
