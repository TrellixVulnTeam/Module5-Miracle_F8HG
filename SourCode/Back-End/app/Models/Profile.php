<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    protected $fillable = [
        'avatar',
        'name',
        'date_of_birth',
        'height',
        'weight',
        'gender',
        'city',
        'country',
        'hobby',
        'description',
        'required',
        'face_book',
        'voice',
    ];

    public function provider(){
        return $this->belongsTo(Provider::class,'provider_id');
    }

    public function profileImages(){
        return $this->hasMany(Profile::class,'profile_id');
    }
>>>>>>> 6bddaa08f63127a70354dac607d9e66e72b3e675
}
