<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $fillable = ['nama_mk', 'sks'];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // generate UUID otomatis jika belum ada
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    // opsional helper
    public function getAllMK()
    {
        return self::all();
    }
}
