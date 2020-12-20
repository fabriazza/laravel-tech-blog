<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SingleArticle extends Component
{
    public $title;
    public $description;
    public $date;
    public $img;
    public $carouselimg;

    public function __construct($title, $description, $date, $img, $carouselimg)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->img = $img;
        $this->carouselimg = $carouselimg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.single-article');
    }
}
