<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $guarded = ["id"];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('nama', 'like', '%'. $search . '%');
        });

    }

    public function Kamar(){
        return $this->belongsTo(Kamar::class);
    }
    public function Tamu(){
        return $this->hasMany(Tamu::class);
    }
    public function Laporan(){
        return $this->hasMany(Laporan::class);
    }
}
