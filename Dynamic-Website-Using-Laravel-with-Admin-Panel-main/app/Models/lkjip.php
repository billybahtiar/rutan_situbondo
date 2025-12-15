<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkjip extends Model
{
    protected $table = 'lkjip';

    protected $fillable = [
        'tahun',
        'judul',
        'file'
    ];
}