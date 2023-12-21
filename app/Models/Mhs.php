<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim','name','class','subjek',
        'dateSubjek','attendance', 'image', 'Fakultas_id'
    ] ;

    public function Fakultas(){
        return $this->belongsTo(Fakultas::class, 'Fakultas_id');
    }
}

