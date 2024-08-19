<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardColor extends Model
{
    use HasFactory;
    public function magicCards(){
        return $this->belongsToMany(MagicCard::class, 'cardcolor_magiccard', 'cardcolor_id', 'magiccard_id');
    }
}
