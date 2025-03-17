<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $image;
    public $title;
    public $description;
    public $price;

    public function __construct($image, $title, $description, $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function render()
    {
        return view('components.product-card');
    }
}
