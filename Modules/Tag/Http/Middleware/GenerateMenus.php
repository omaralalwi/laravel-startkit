<?php

namespace Modules\Tag\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Tags
            $menu->add('<i class="fas fa-tags c-sidebar-nav-icon"></i> '.trans('oa_menues.backend.sidebar.tags'), [
                'route' => 'backend.tags.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order' => 84,
                    'activematches' => ['admin/tags*'],
                    'permission' => ['view_tags'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
