<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClientLayout extends Component
{
    public $entity;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.client');
    }

    public function boot()
    {
        Blade::component('client', ClientLayout::class);
    }
}
