<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    

    private int $id;
    private String $name;
    private String $description;
    private bool $is_alcoholic;
    private float $grade;

    public function cocktail(){
        return $this->belongsTo(Cocktail::class);
     }

}
