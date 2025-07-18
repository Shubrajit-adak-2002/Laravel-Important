<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{

    // Here we created an array for checking alert type
    protected $types = [
        "success",
        "danger",
        "warning"
    ];


    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $message)
    {
        //
    }

    // Here we created a function for checking array's alert values
    function type(){
        // if any not matches array values for alert it will return 'info' value for alert
        return in_array($this->type,$this->types) ? $this->type : "info";
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
