<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    private int $id;
    private String $name;
    private String $category;
    private String $suggested_class;
    private bool $is_alcoholic;
    private String $instructions;
    private String $ingredient1;
    private String $ingredient2;
    private String $ingredient3;
    private String $ingredient4;
    private String $ingredient5;
    private String $ingredient6;
    private String $ingredient7;
    private String $ingredient8;
    private String $measure1;
    private String $measure2;
    private String $measure3;
    private String $measure4;
    private String $measure5;
    private String $measure6;
    private String $measure7;
    private String $measure8;


    public function ingredients(){
        return $this->hasMany(Ingredient::class);
     }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of suggested_class
     */ 
    public function getSuggested_class()
    {
        return $this->suggested_class;
    }

    /**
     * Set the value of suggested_class
     *
     * @return  self
     */ 
    public function setSuggested_class($suggested_class)
    {
        $this->suggested_class = $suggested_class;

        return $this;
    }

    /**
     * Get the value of is_alcoholic
     */ 
    public function getIs_alcoholic()
    {
        return $this->is_alcoholic;
    }

    /**
     * Set the value of is_alcoholic
     *
     * @return  self
     */ 
    public function setIs_alcoholic($is_alcoholic)
    {
        $this->is_alcoholic = $is_alcoholic;

        return $this;
    }

    /**
     * Get the value of ingredient1
     */ 
    public function getIngredient1()
    {
        return $this->ingredient1;
    }

    /**
     * Set the value of ingredient1
     *
     * @return  self
     */ 
    public function setIngredient1($ingredient1)
    {
        $this->ingredient1 = $ingredient1;

        return $this;
    }

    /**
     * Get the value of ingredient2
     */ 
    public function getIngredient2()
    {
        return $this->ingredient2;
    }

    /**
     * Set the value of ingredient2
     *
     * @return  self
     */ 
    public function setIngredient2($ingredient2)
    {
        $this->ingredient2 = $ingredient2;

        return $this;
    }

    /**
     * Get the value of ingredient3
     */ 
    public function getIngredient3()
    {
        return $this->ingredient3;
    }

    /**
     * Set the value of ingredient3
     *
     * @return  self
     */ 
    public function setIngredient3($ingredient3)
    {
        $this->ingredient3 = $ingredient3;

        return $this;
    }

    /**
     * Get the value of ingredient4
     */ 
    public function getIngredient4()
    {
        return $this->ingredient4;
    }

    /**
     * Set the value of ingredient4
     *
     * @return  self
     */ 
    public function setIngredient4($ingredient4)
    {
        $this->ingredient4 = $ingredient4;

        return $this;
    }

    /**
     * Get the value of ingredient5
     */ 
    public function getIngredient5()
    {
        return $this->ingredient5;
    }

    /**
     * Set the value of ingredient5
     *
     * @return  self
     */ 
    public function setIngredient5($ingredient5)
    {
        $this->ingredient5 = $ingredient5;

        return $this;
    }

    /**
     * Get the value of ingredient6
     */ 
    public function getIngredient6()
    {
        return $this->ingredient6;
    }

    /**
     * Set the value of ingredient6
     *
     * @return  self
     */ 
    public function setIngredient6($ingredient6)
    {
        $this->ingredient6 = $ingredient6;

        return $this;
    }

    /**
     * Get the value of ingredient7
     */ 
    public function getIngredient7()
    {
        return $this->ingredient7;
    }

    /**
     * Set the value of ingredient7
     *
     * @return  self
     */ 
    public function setIngredient7($ingredient7)
    {
        $this->ingredient7 = $ingredient7;

        return $this;
    }

    /**
     * Get the value of ingredient8
     */ 
    public function getIngredient8()
    {
        return $this->ingredient8;
    }

    /**
     * Set the value of ingredient8
     *
     * @return  self
     */ 
    public function setIngredient8($ingredient8)
    {
        $this->ingredient8 = $ingredient8;

        return $this;
    }

    /**
     * Get the value of measure1
     */ 
    public function getMeasure1()
    {
        return $this->measure1;
    }

    /**
     * Set the value of measure1
     *
     * @return  self
     */ 
    public function setMeasure1($measure1)
    {
        $this->measure1 = $measure1;

        return $this;
    }

    /**
     * Get the value of measure2
     */ 
    public function getMeasure2()
    {
        return $this->measure2;
    }

    /**
     * Set the value of measure2
     *
     * @return  self
     */ 
    public function setMeasure2($measure2)
    {
        $this->measure2 = $measure2;

        return $this;
    }

    /**
     * Get the value of measure4
     */ 
    public function getMeasure4()
    {
        return $this->measure4;
    }

    /**
     * Set the value of measure4
     *
     * @return  self
     */ 
    public function setMeasure4($measure4)
    {
        $this->measure4 = $measure4;

        return $this;
    }

    /**
     * Get the value of measure3
     */ 
    public function getMeasure3()
    {
        return $this->measure3;
    }

    /**
     * Set the value of measure3
     *
     * @return  self
     */ 
    public function setMeasure3($measure3)
    {
        $this->measure3 = $measure3;

        return $this;
    }

    /**
     * Get the value of measure5
     */ 
    public function getMeasure5()
    {
        return $this->measure5;
    }

    /**
     * Set the value of measure5
     *
     * @return  self
     */ 
    public function setMeasure5($measure5)
    {
        $this->measure5 = $measure5;

        return $this;
    }

    /**
     * Get the value of measure6
     */ 
    public function getMeasure6()
    {
        return $this->measure6;
    }

    /**
     * Set the value of measure6
     *
     * @return  self
     */ 
    public function setMeasure6($measure6)
    {
        $this->measure6 = $measure6;

        return $this;
    }

    /**
     * Get the value of measure7
     */ 
    public function getMeasure7()
    {
        return $this->measure7;
    }

    /**
     * Set the value of measure7
     *
     * @return  self
     */ 
    public function setMeasure7($measure7)
    {
        $this->measure7 = $measure7;

        return $this;
    }

    /**
     * Get the value of measure8
     */ 
    public function getMeasure8()
    {
        return $this->measure8;
    }

    /**
     * Set the value of measure8
     *
     * @return  self
     */ 
    public function setMeasure8($measure8)
    {
        $this->measure8 = $measure8;

        return $this;
    }
}
