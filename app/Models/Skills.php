<?php 
namespace App\Models;

class Skills {
    public $name;
    public $color;
    public $advancement;
    public function __construct($name, $color, $percent)
    {
        $this->name = $name;
        $this->color = $color;
        $this->advancement = $percent;
    }
};