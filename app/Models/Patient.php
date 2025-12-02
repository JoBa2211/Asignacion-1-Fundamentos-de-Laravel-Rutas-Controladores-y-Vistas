<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','lastname','phone','email','date_of_birth'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    //
}
