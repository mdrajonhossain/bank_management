<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchdatamodel extends Model
{
    use HasFactory;


    protected $fillable = [
        'branch_address',
        'is_bank',
        'is_branch'
    ];
 
}