<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alerts extends Component {

    public $clases;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type){
            case 'info':
                $clases = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400 bg-blue-50";
                break;

            case 'danger':
                $clases = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400 bg-red-5";
                break;

            default :
                $clases = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400 bg-blue-40";
                break;
        }
        $this->clases = $clases;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts');
    }
}
