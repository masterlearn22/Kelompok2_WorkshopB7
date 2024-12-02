<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $primaryKey = 'gym_id';

    protected $fillable = [
        'user_id',
        'nama_gym',
        'city',
        'alamat',
        'koordinat',
        'jarak',
        'deskripsi',
        'fasilitas',
        'foto',
        'jam_operasional',
        'approved_at'
    ];

    protected $dates = ['approved_at'];

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Relasi dengan gym prices
    public function prices()
    {
        return $this->hasMany(GymPrice::class, 'gym_id', 'gym_id');
    }
}