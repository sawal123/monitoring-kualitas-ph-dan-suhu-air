<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phair extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "phair";

    // protected $fillable = ['phair', 'status', 'deskripsi'];
}
