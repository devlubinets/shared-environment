<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Env extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        "file_name",
        "file_size",
    ];
}
