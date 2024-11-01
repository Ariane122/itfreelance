<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entreprise extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = ['	created_at','updated_at'];

    public function user () {
        return $this->belongsTo(User::class , 'user_id')->withTrashed();
    }

    public function projet () {
        return $this->hasMany(Projet::class)->withTrashed();
    }
}
