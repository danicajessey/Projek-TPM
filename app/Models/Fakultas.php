<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fakultas_name'
    ];

    public function mhs(){
        return $this->hasMany(Mhs::class);
    }


}
