<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dpt extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'dpts';

    protected $guard = 'dpts';

    protected $primaryKey="id";

    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'alamat',
        'tgllahir',
        'status',
        'role'
    ];

    protected $guarded = [];

    protected $appends = ['status_label'];

    public function setPasswordAttribute($value) {

    }

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Belum Memilih</span>';
        }
        return '<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Sudah Memilih</span>';
    }

    public function scopeFilter($query, array $filters){
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('nik', 'like', '%' .$search . '%');
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'nik_verified_at' => 'datetime',
    ];
}
