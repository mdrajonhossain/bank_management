<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fdr_model extends Model{
    use HasFactory;

    public function bankdatamodel(){
        return $this->belongsTo(Bankdatamodel::class, 'aply_bank_id');
        


    }
}
