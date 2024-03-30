<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankdatamodel extends Model
{
    use HasFactory;


    protected $fillable = [
        'bankname',
        'bankaddress',
        'isbank',
        'isbranch'
    ];

}