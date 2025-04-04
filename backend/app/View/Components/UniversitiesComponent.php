<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\UniversityController;

class UniversitiesComponent extends Component
{
    public $universityData;

    public function __construct()
    {
        $universityController = new UniversityController();
        $this->universityData = $universityController->getData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.universities-component');
    }
}
