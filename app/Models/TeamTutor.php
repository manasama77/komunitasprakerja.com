<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamTutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getPhotoFeAttribute()
    {
        $img = Storage::disk('team_tutor')->url($this->getRawOriginal('photo'));
        $name = $this->getRawOriginal('name');
        return '<img src="' . $img . '" alt="' . $name . '" class="img-fluid" />';
    }

    public function getPhotoBeAttribute()
    {
        $img = Storage::disk('team_tutor')->url($this->getRawOriginal('photo'));
        $name = $this->getRawOriginal('name');
        return '<img src="' . $img . '" alt="' . $name . '" class="img-thumbnail" style="max-height: 150px;" />';
    }
}
