<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{

    public $styles = null; // Ini kita panggil di bagian app.blade
    public $script = null;

    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ? $title : 'Portfolio'; // Ternary
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
