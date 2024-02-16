<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;
use Illuminate\View\Component;

class Price extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public float $value,
        public string $currency = "MAD"
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.price');
    }
}
