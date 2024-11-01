<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SousCategorie extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = ['	created_at','updated_at'];

    public function categorie () {
        return $this->belongsTo(Categorie::class , 'categorie_id')->withTrashed();
    }
}
