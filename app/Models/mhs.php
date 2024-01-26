<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primarykey ='id';
    protected $fillable = ['nim', 'nama', 'kelas', "deskripsi"];
}
