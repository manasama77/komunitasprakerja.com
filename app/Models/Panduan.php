<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panduan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = [
        'title',
        'slug',
        'description',
        'banner',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getBannerFeAttribute()
    {
        $img = Storage::disk('panduan')->url($this->getRawOriginal('banner'));
        return '<img src="' . $img . '" alt="" class="img-fluid" style="max-width: 400px;" />';
    }

    public function getBannerBeAttribute()
    {
        $img = Storage::disk('panduan')->url($this->getRawOriginal('banner'));
        return '<img src="' . $img . '" alt="" class="img-thumbnail" style="max-height: 200px;" />';
    }

    public function getBannerShowAttribute()
    {
        $img = Storage::disk('panduan')->url($this->getRawOriginal('banner'));
        return '<img src="' . $img . '" alt="" class="card-img-top" alt="' . $this->getRawOriginal('title') . '" style="max-height: 600px;" />';
    }

    public function getDescriptionHighlightAttribute()
    {
        return Str::limit($this->getRawOriginal('description'), 100);
    }
}
