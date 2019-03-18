<?php

namespace Dniccum\NovaDocumentation;

use Dniccum\NovaDocumentation\Resources\Documentation;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaDocumentation extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-documentation', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-documentation', __DIR__.'/../dist/css/tool.css');

        Nova::resources([
            Documentation::class
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-documentation::navigation');
    }
}
