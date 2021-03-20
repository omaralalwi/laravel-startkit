<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

        /* package for laravel menue
            * https://github.com/lavary/laravel-menu#installation
        */

        \Menu::make('admin_sidebar', function ($menu) {
            // Dashboard
            $menu->add('<i class="cil-speedometer c-sidebar-nav-icon"></i> ' . trans('oa_menues.backend.sidebar.dashboard') , [
                'route' => 'backend.dashboard',
                'class' => 'c-sidebar-nav-item',
            ])
            ->data([
                'order'         => 1,
                'activematches' => 'admin/dashboard*',
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Notifications
            $menu->add('<i class="c-sidebar-nav-icon fas fa-bell"></i>' . trans('oa_menues.backend.sidebar.notifications') , [
                'route' => 'backend.notifications.index',
                'class' => 'c-sidebar-nav-item',
            ])
            ->data([
                'order'         => 99,
                'activematches' => 'admin/notifications*',
                'permission'    => [],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Separator: Access Management
            $menu->add(trans('oa_menues.backend.sidebar.management'), [
                'class' => 'c-sidebar-nav-title',
            ])
            ->data([
                'order'         => 101,
                'permission'    => ['edit_settings', 'view_backups', 'view_users', 'view_roles', 'view_logs'],
            ]);

            // Settings
           $menu->add('<i class="c-sidebar-nav-icon fas fa-cogs"></i> ' . trans('oa_menues.backend.sidebar.settings'), [
                'route' => 'backend.settings',
                'class' => 'c-sidebar-nav-item',
            ])
            ->data([
                'order'         => 102,
                'activematches' => 'admin/settings*',
                'permission'    => ['edit_settings'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Backup
            $menu->add('<i class="c-sidebar-nav-icon fas fa-archive"></i> ' . trans('oa_menues.backend.sidebar.backups'), [
                'route' => 'backend.backups.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 103,
                'activematches' => 'admin/backups*',
                'permission'    => ['view_backups'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Access Control Dropdown
            $accessControl = $menu->add('<i class="c-sidebar-nav-icon cil-shield-alt"></i> ' . trans('oa_menues.backend.sidebar.access_control'), [
                'class' => 'c-sidebar-nav-dropdown',
            ])
            ->data([
                'order'         => 104,
                'activematches' => [
                    'admin/users*',
                    'admin/roles*',
                ],
                'permission'    => ['view_users', 'view_roles'],
            ]);
            $accessControl->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="c-sidebar-nav-icon cil-people"></i> ' . trans('oa_menues.backend.sidebar.users'), [
                'route' => 'backend.users.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 105,
                'activematches' => 'admin/users*',
                'permission'    => ['view_users'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Submenu: Roles
            $accessControl->add('<i class="c-sidebar-nav-icon cil-people"></i> ' . trans('oa_menues.backend.sidebar.roles'), [
                'route' => 'backend.roles.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 106,
                'activematches' => 'admin/roles*',
                'permission'    => ['view_roles'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Log Viewer
            // Log Viewer Dropdown
            $accessControl = $menu->add('<i class="c-sidebar-nav-icon cil-list-rich"></i> ' . trans('oa_menues.backend.sidebar.log_viewer'), [
                'class' => 'c-sidebar-nav-dropdown',
            ])
            ->data([
                'order'         => 107,
                'activematches' => [
                    'log-viewer*',
                ],
                'permission'    => ['view_logs'],
            ]);
            $accessControl->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Log Viewer Dashboard
            $accessControl->add('<i class="c-sidebar-nav-icon cil-list"></i> ' . trans('oa_menues.backend.sidebar.dashboard'), [
                'route' => 'log-viewer::dashboard',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 108,
                'activematches' => 'admin/log-viewer',
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Submenu: Log Viewer Logs by Days
            $accessControl->add('<i class="c-sidebar-nav-icon cil-list-numbered"></i>' . trans('oa_menues.backend.sidebar.logs_by_days'), [
                'route' => 'log-viewer::logs.list',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 109,
                'activematches' => 'admin/log-viewer/logs*',
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            /* Access Permission Check
            * Filtering the Items
            * https://github.com/lavary/laravel-menu#filtering-the-items
            */
            $menu->filter(function ($item) {
                if ($item->data('permission')) {
                    if (auth()->check()) {
                        if (auth()->user()->hasRole('super admin')) {
                            return true;
                        } elseif (auth()->user()->hasAnyPermission($item->data('permission'))) {
                            return true;
                        }
                    }

                    return false;
                } else {
                    return true;
                }
            });

            /* Set Active Menu
            * Filtering the Items
            * https://github.com/lavary/laravel-menu#filtering-the-items
            */
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $matches = is_array($item->activematches) ? $item->activematches : [$item->activematches];

                    foreach ($matches as $pattern) {
                        if (Str::is($pattern, \Request::path())) {
                            $item->activate();
                            $item->active();
                            if ($item->hasParent()) {
                                $item->parent()->activate();
                                $item->parent()->active();
                            }
                            // dd($pattern);
                        }
                    }
                }

                return true;
            });
        })->sortBy('order');

        return $next($request);
    }
}
