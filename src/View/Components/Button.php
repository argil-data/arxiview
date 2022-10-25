<?php

namespace ArgilData\ArxiView\View\Components;

use Illuminate\View\Component;
use ArgilData\ArxiView\Facades\Arxi;
// use ArgilData\ArxiView\Traits\arxiBasic;
// use ArgilData\ArxiView\Traits\arxiColors;

class Button extends Component
{
    // use arxiBasic;
    // use arxiColors;

    public $color;
    public $isDark = false;

    // public $basic_style = [
    //     "block", 'capitalize', 'cursor-pointer', 
    //     'shadow-sm','transition-all', 'duration-300', 
    //     'rounded', 'min-w-min'];

    public $size;

    public $sizeStyle = [
        'sm' => ['px-3','py-1','text-sm'],
        'md' => ['px-4','py-2'],
        'lg' => ['px-8','py-3']
    ];

    public $style;

    // /**
    //  * Create a new component instance.
    //  *
    //  * @param string $element 
    //  * @param string $color 
    //  * @param string $size 
    //  * 
    //  * @return void
    //  */
    public function __construct(
        $color = "",
        $size = ""
    ) {
        $this->color = $color == '' ? config('arxi.theme') : $color;
        $this->size = $size == '' ? config('arxi.size') : $size;
        //$this->setStyle();
    }

    public function setStyle()
    {   

        $c = Arxi::theme($this->color)
            ->padding($this->size)
            ->add($this->basic_style);

        if ($this->color == 'white') {
            $c->add(['bg-white', 'hover:shadow', 'text-black']);
        } elseif ($this->color == 'black') {
            $c->add(['bg-black', 'hover:bg-gray-700', 'text-white' ]);
        } else {
            $c->add(['border'])
            ->bg()->border();
        }
    
        $this->style .= $c->get()." ";
        
        $this->style .=" ". Arxi::theme($this->color, true)
            ->bg()->hover()->get();
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        //$ns = $this->newStyle();
        //dd($ns);
        return view('arxi::btnsrctest');
    }
}