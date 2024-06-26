<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $size;
    public $method;
    public $centered;
    /**
     * Create a new component instance.
     */
    public function __construct($size = 'modal-md', $method = 'post', $centered = '')
    {
        $this->size = $size;
        $this->method = $method;
        $this->centered = $centered;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
