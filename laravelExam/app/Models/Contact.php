<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'photo',
        'user_id'
    ];

    //relation de cadinalité: un contact appartient à unn seul utilisateur
    public function user(){
        return $this->belongsTo(User::class);
     }

     public function getAvatarUrl(){
        return Storage::url($this->photo);
    }
}
