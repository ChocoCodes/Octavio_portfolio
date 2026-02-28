<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table = 'certificates';
    protected $fillable = [
        'name',
        'issuer',
        'filename',
        'obtained_on'
    ];
}
