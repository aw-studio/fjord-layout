<?php

namespace FjordApp\Config;

use Fjord\Application\Navigation\Config;
use Fjord\Application\Navigation\Navigation;

class NavigationConfig extends Config
{
    /**
     * Topbar navigation entries.
     *
     * @param \Fjord\Application\Navigation\Navigation $nav
     * @return void
     */
    protected function topbar(Navigation $nav)
    {
        $nav->section([
            $nav->title(__f('fj.user_administration')),

            $nav->preset('users'),
            $nav->preset('permissions')
        ]);
    }

    /**
     * Main navigation entries.
     *
     * @param \Fjord\Application\Navigation\Navigation $nav
     * @return void
     */
    protected function main(Navigation $nav)
    {
        $nav->section([
            $nav->group([
                'title' => 'Forms',
                'icon' => '<i class="fas fa-file"></i>',
            ], [
                $nav->preset('form.fields', [
                    'icon' => fa('heading')
                ]),
            ])
        ]);
    }
}
