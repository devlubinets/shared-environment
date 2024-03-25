<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Env extends Model
{
    use HasFactory;

    protected $fillable = [
        "file_name",
        "file_size",
        "content",
        /*"type"*/ /*todo: free, dev, prod, other*/
    ];
}
