<?php

namespace App\View\Composers\Navigation;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class PrimaryNav extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'navigation' => $this->navigation(),
        ];
    }

    /**
     * Returns the menu items.
     *
     * @return array
     */
    public function navigation()
    {
        return Navi::build('primary_navigation');
    }
}
