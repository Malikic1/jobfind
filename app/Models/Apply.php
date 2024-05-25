<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'applications'; // Specify the table name

    protected $fillable = [
        "name","email","user_id","filename","file_path","letter","reason"
        ];
}
