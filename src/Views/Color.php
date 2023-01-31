<?php

namespace TomatoPHP\TomatoComponents\Views;

use Illuminate\View\Component;
use ProtoneMedia\Splade\Components\Form;
use ProtoneMedia\Splade\Components\Form\InteractsWithFormElement;

class Color extends Component
{
    use InteractsWithFormElement;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name = '',
        public string $vModel = '',
        public string $type = 'color',
        public string $label = '',
        public string $validationKey = '',
        public bool $showErrors = true,
        public string $prepend = '',
        public string $append = '',
        public string $help = '',
        public bool $alwaysEnablePrepend = false,
        public bool $alwaysEnableAppend = false,
    ) {
        Form::allowAttribute($name);
    }

    /**
     * Returns a boolean whether the input type is 'hidden'.
     *
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->type === 'hidden';
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('tomato-components::components.color');
    }
}
