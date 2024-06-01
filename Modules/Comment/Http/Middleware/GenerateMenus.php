<?php

namespace Modules\Comment\Http\Middleware;

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

            // comments
            $menu->add('<i class="fas fa-comments c-sidebar-nav-icon"></i> '.trans('oa_menues.backend.sidebar.comments'), [
                'route' => 'backend.comments.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order' => 85,
                    'activematches' => ['admin/comments*'],
                    'permission' => ['view_comments'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
