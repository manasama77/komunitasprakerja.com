<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'description',
        'dt_jadwal',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getDtJadwalIndAttribute()
    {
        Carbon::setLocale('id');

        setlocale(LC_ALL, 'id');
        $dt_jadwal = $this->getRawOriginal('dt_jadwal');
        return Carbon::parse($dt_jadwal)->isoFormat("dddd, D MMMM Y HH:mm");
    }
}
