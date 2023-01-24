<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $colorText;
    public $colorFondo;

    public function __construct($colorText="red", $colorFondo="red")
    {
        $this->colorText=$colorText;
        $this->colorFondo=$colorFondo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    /**
     *
     */
    public function peligro() {
        if($this->colorFondo == 'red') {
            return "PELIGROOO!!!!";
        }
    }
}
