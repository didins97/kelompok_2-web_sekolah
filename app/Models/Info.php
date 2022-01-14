<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';

    protected $fillable = [
    	'email','no_telp','jam_mulai','jam_selesai','deskripsi','alamat'
    ]; 
}
