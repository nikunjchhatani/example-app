<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
  //set title attribute for this component
  public string $title = "Playlist App";
    /**
     * Create a new component instance.
     */
    
     //set an attribute for page name
     public string $pageName;  

    public function __construct(string $pageName = '') {
        $this->pageName = $pageName;
      }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if($this->pageName){
            $this->title = $this->title.' | '.$this->pageName;
          }
          
          return view('components.layouts.main');
    }
}