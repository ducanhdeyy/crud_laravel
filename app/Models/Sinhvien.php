<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable = ['ho_ten','anh','dia_chi','lop_hoc_id'];

    public function lopHoc()
    {
        return $this->belongsTo(Lophoc::class);
    }
}

