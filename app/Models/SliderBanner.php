<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class SliderBanner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'banner_desktop',
        'banner_mobile',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getBannerDesktopImgAttribute()
    {
        $img = Storage::disk('slider_banner')->url($this->getRawOriginal('banner_desktop'));
        return '<img src="' . $img . '" alt="" class="img-thumbnail" style="max-height: 200px;" />';
    }

    public function getBannerMobileImgAttribute()
    {
        $img = Storage::disk('slider_banner')->url($this->getRawOriginal('banner_mobile'));
        return '<img src="' . $img . '" alt="" class="img-thumbnail" style="max-height: 200px;" />';
    }

    public function getBannerFeAttribute()
    {
        $name        = $this->getRawOriginal('name');
        $img_desktop = Storage::disk('slider_banner')->url($this->getRawOriginal('banner_desktop'));
        $img_mobile  = Storage::disk('slider_banner')->url($this->getRawOriginal('banner_mobile'));

        return '<picture> <source media="(min-width:768px)" srcset="' . $img_desktop . '" /> <source media="(max-width:575px)" srcset="' . $img_mobile . '" /> <img src="' . $img_desktop . '" alt="' . $name . '" class="img-fluid" loading="lazy" /> </picture>';
    }
}
