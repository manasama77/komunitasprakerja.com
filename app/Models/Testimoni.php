<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'testimoni',
    ];

    public function getPhotoFeAttribute()
    {
        $img = Storage::disk('testimoni')->url($this->getRawOriginal('photo'));
        $name = $this->getRawOriginal('name');
        return '<img src="' . $img . '" alt="' . $name . '" class="img-fluid testimonial-img" />';
    }

    public function getPhotoBeAttribute()
    {
        $img = Storage::disk('testimoni')->url($this->getRawOriginal('photo'));
        $name = $this->getRawOriginal('name');
        return '<img src="' . $img . '" alt="' . $name . '" class="img-thumbnail" style="max-height: 150px;" />';
    }
}
