<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagicCard extends Model
{
    use HasFactory;
    public function cardColors(){
        return $this->belongsToMany(CardColor::class, 'cardcolor_magiccard', 'magiccard_id', 'cardcolor_id');
    }
}
