<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchdatamodel extends Model
{
    use HasFactory;

 
    protected $fillable = [
        'bank_id', 'branch_name',
    ];
 
}