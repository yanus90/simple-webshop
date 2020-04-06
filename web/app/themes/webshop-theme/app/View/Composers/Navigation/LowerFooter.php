<?php

namespace App\View\Composers\Navigation;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class LowerFooter extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.footer'
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
        return Navi::build('lower_footer');
    }
}
