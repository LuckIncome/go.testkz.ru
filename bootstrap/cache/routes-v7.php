<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/arrilot/load-widget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RgumIbxS59vnJOrW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::csILyHX8mWo03bsD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sd6B8OwNhXyFjksK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'articles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.postlogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/abouts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/articles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/titles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feedback/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/eventbacks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mailings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/new_folder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.new_folder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/delete_file_folder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/move_file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.move',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/rename_file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.rename',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/crop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.crop',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/compass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.compass.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.compass.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/voyager-assets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.voyager_assets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/eventback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|a(?|rticles/([^/]++)(?|(*:41))|bout/([^/]++)(?|(*:65)))|blogs/([^/]++)(?|(*:91))|contact/([^/]++)(?|(*:118))|menu/([^/]++)(?|(*:143))|settings/([^/]++)(?|(*:172))|pa(?|ge/([^/]++)(?|(*:200))|rtner/([^/]++)(?|(*:226)))|events/([^/]++)(?|(*:254)))|dmin/(?|users/([^/]++)(?|/(?|restore(*:300)|edit(*:312))|(*:321))|m(?|enus/([^/]++)(?|/(?|restore(*:361)|edit(*:373)|builder(*:388)|order(*:401)|item(?|/([^/]++)(*:425)|(*:433)))|(*:443))|ailings/([^/]++)(?|/(?|restore(*:482)|edit(*:494))|(*:503)))|roles/([^/]++)(?|/(?|restore(*:541)|edit(*:553))|(*:562))|c(?|ategories/([^/]++)(?|/(?|restore(*:607)|edit(*:619))|(*:628))|ontacts/([^/]++)(?|/(?|restore(*:667)|edit(*:679))|(*:688)))|p(?|osts/([^/]++)(?|/(?|restore(*:729)|edit(*:741))|(*:750))|a(?|ges/([^/]++)(?|/(?|restore(*:789)|edit(*:801))|(*:810))|rtners/([^/]++)(?|/(?|restore(*:848)|edit(*:860))|(*:869))))|a(?|bouts/([^/]++)(?|/(?|restore(*:912)|edit(*:924))|(*:933))|rticles/([^/]++)(?|/(?|restore(*:972)|edit(*:984))|(*:993)))|b(?|logs/([^/]++)(?|/(?|restore(*:1034)|edit(*:1047))|(*:1057))|read/(?|([^/]++)(?|/(?|create(*:1096)|edit(*:1109))|(*:1119))|relationship(*:1141)|delete_relationship/([^/]++)(*:1178)))|event(?|s/([^/]++)(?|/(?|restore(*:1221)|edit(*:1234))|(*:1244))|backs/([^/]++)(?|/(?|restore(*:1282)|edit(*:1295))|(*:1305)))|titles/([^/]++)(?|/(?|restore(*:1345)|edit(*:1358))|(*:1368))|s(?|ubscribers/([^/]++)(?|/(?|restore(*:1415)|edit(*:1428))|(*:1438))|ettings/([^/]++)(?|(*:1467)|/(?|move_(?|up(*:1490)|down(*:1503))|delete_value(*:1525))))|feedback/([^/]++)(?|/(?|restore(*:1568)|edit(*:1581))|(*:1591))|database/([^/]++)(?|(*:1621)|/edit(*:1635)|(*:1644))))|/locale/([^/]++)(*:1672)|/blog/([^/]++)(*:1695)|/news/([^/]++)(*:1718)|/event/([^/]++)(*:1742)|/([^/]++)?(*:1761))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'articles.update',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'articles.destroy',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.show',
          ),
          1 => 
          array (
            0 => 'about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about.update',
          ),
          1 => 
          array (
            0 => 'about',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'about.destroy',
          ),
          1 => 
          array (
            0 => 'about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.show',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'contact.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'menu.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'page.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'page.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.show',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partner.update',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'partner.destroy',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.show',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.update',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'events.destroy',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.builder',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.order_item',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.add',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.mailings.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.contacts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.posts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.partners.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.abouts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.articles.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blogs.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.create',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.edit',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.relationship',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.delete_relationship',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.events.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.eventbacks.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.titles.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.subscribers.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.move_up',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.move_down',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.delete_value',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.feedback.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.show',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.edit',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.update',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.destroy',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale.set',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.show',
          ),
          1 => 
          array (
            0 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.get',
            'page' => NULL,
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::RgumIbxS59vnJOrW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'arrilot/load-widget',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Arrilot\\Widgets\\Controllers\\WidgetController@showWidget',
        'controller' => 'Arrilot\\Widgets\\Controllers\\WidgetController@showWidget',
        'namespace' => 'Arrilot\\Widgets\\Controllers',
        'prefix' => 'arrilot',
        'where' => 
        array (
        ),
        'as' => 'generated::RgumIbxS59vnJOrW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::csILyHX8mWo03bsD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::csILyHX8mWo03bsD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sd6B8OwNhXyFjksK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001273bd0800000000032be69a";}";s:4:"hash";s:44:"qzGEQ/PSrr/1tMrNr4G3ZItlxLlf8HxA9yrALN467ec=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sd6B8OwNhXyFjksK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'articles.index',
        'uses' => 'App\\Http\\Controllers\\API\\ArticleController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ArticleController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'articles.store',
        'uses' => 'App\\Http\\Controllers\\API\\ArticleController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ArticleController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'articles.show',
        'uses' => 'App\\Http\\Controllers\\API\\ArticleController@show',
        'controller' => 'App\\Http\\Controllers\\API\\ArticleController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'articles.update',
        'uses' => 'App\\Http\\Controllers\\API\\ArticleController@update',
        'controller' => 'App\\Http\\Controllers\\API\\ArticleController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'articles.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\ArticleController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\ArticleController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'blogs.index',
        'uses' => 'App\\Http\\Controllers\\API\\BlogsController@index',
        'controller' => 'App\\Http\\Controllers\\API\\BlogsController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'blogs.store',
        'uses' => 'App\\Http\\Controllers\\API\\BlogsController@store',
        'controller' => 'App\\Http\\Controllers\\API\\BlogsController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'blogs.show',
        'uses' => 'App\\Http\\Controllers\\API\\BlogsController@show',
        'controller' => 'App\\Http\\Controllers\\API\\BlogsController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'blogs.update',
        'uses' => 'App\\Http\\Controllers\\API\\BlogsController@update',
        'controller' => 'App\\Http\\Controllers\\API\\BlogsController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'blogs.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\BlogsController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\BlogsController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'contact.index',
        'uses' => 'App\\Http\\Controllers\\API\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ContactController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'contact.store',
        'uses' => 'App\\Http\\Controllers\\API\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ContactController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'contact.show',
        'uses' => 'App\\Http\\Controllers\\API\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\API\\ContactController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/contact/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'contact.update',
        'uses' => 'App\\Http\\Controllers\\API\\ContactController@update',
        'controller' => 'App\\Http\\Controllers\\API\\ContactController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/contact/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'contact.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\ContactController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'menu.index',
        'uses' => 'App\\Http\\Controllers\\API\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\API\\MenuController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'menu.store',
        'uses' => 'App\\Http\\Controllers\\API\\MenuController@store',
        'controller' => 'App\\Http\\Controllers\\API\\MenuController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'menu.show',
        'uses' => 'App\\Http\\Controllers\\API\\MenuController@show',
        'controller' => 'App\\Http\\Controllers\\API\\MenuController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'menu.update',
        'uses' => 'App\\Http\\Controllers\\API\\MenuController@update',
        'controller' => 'App\\Http\\Controllers\\API\\MenuController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/menu/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'menu.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\MenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'settings.index',
        'uses' => 'App\\Http\\Controllers\\API\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\API\\SettingController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'settings.store',
        'uses' => 'App\\Http\\Controllers\\API\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\API\\SettingController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'settings.show',
        'uses' => 'App\\Http\\Controllers\\API\\SettingController@show',
        'controller' => 'App\\Http\\Controllers\\API\\SettingController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'settings.update',
        'uses' => 'App\\Http\\Controllers\\API\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\API\\SettingController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'settings.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\SettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\SettingController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'page.index',
        'uses' => 'App\\Http\\Controllers\\API\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'page.store',
        'uses' => 'App\\Http\\Controllers\\API\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PageController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'page.show',
        'uses' => 'App\\Http\\Controllers\\API\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\API\\PageController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'page.update',
        'uses' => 'App\\Http\\Controllers\\API\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\API\\PageController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'page.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\PageController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'events.index',
        'uses' => 'App\\Http\\Controllers\\API\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\API\\EventController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'events.store',
        'uses' => 'App\\Http\\Controllers\\API\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\API\\EventController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'events.show',
        'uses' => 'App\\Http\\Controllers\\API\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\API\\EventController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'events.update',
        'uses' => 'App\\Http\\Controllers\\API\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\API\\EventController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'events.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'partner.index',
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'partner.store',
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'partner.show',
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@show',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'partner.update',
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@update',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'partner.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'about.index',
        'uses' => 'App\\Http\\Controllers\\API\\AboutController@index',
        'controller' => 'App\\Http\\Controllers\\API\\AboutController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'about.store',
        'uses' => 'App\\Http\\Controllers\\API\\AboutController@store',
        'controller' => 'App\\Http\\Controllers\\API\\AboutController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/about/{about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'about.show',
        'uses' => 'App\\Http\\Controllers\\API\\AboutController@show',
        'controller' => 'App\\Http\\Controllers\\API\\AboutController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/about/{about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'about.update',
        'uses' => 'App\\Http\\Controllers\\API\\AboutController@update',
        'controller' => 'App\\Http\\Controllers\\API\\AboutController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/about/{about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'about.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\AboutController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\AboutController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@login',
        'as' => 'voyager.login',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.postlogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@postLogin',
        'as' => 'voyager.postlogin',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@postLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@index',
        'as' => 'voyager.dashboard',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@logout',
        'as' => 'voyager.logout',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@upload',
        'as' => 'voyager.upload',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@profile',
        'as' => 'voyager.profile',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@profile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@order',
        'as' => 'voyager.users.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@action',
        'as' => 'voyager.users.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update_order',
        'as' => 'voyager.users.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@restore',
        'as' => 'voyager.users.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@relation',
        'as' => 'voyager.users.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@remove_media',
        'as' => 'voyager.users.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.menus.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.menus.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.menus.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.menus.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.menus.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.menus.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@order',
        'as' => 'voyager.roles.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@action',
        'as' => 'voyager.roles.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update_order',
        'as' => 'voyager.roles.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@restore',
        'as' => 'voyager.roles.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@relation',
        'as' => 'voyager.roles.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@remove_media',
        'as' => 'voyager.roles.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.categories.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.categories.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.categories.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.categories.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.categories.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.categories.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.posts.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.posts.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.posts.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.posts.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.posts.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.posts.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.posts.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.pages.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.pages.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.pages.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.pages.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.pages.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.pages.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.contacts.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.contacts.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.contacts.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.contacts.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.contacts.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.contacts.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/contacts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contacts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.contacts.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.abouts.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/abouts/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.abouts.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/abouts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.abouts.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.abouts.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.abouts.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/abouts/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.abouts.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/abouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/abouts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/abouts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.abouts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/abouts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.abouts.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.blogs.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.blogs.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.blogs.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.blogs.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.blogs.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.blogs.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blogs.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.articles.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/articles/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.articles.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/articles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.articles.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.articles.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.articles.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/articles/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.articles.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/articles/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/articles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.articles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/articles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.articles.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.events.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/events/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.events.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/events/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.events.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.events.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.events.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/events/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.events.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.events.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.events.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.partners.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.partners.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.partners.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.partners.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.partners.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.partners.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/partners/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.partners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/partners/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.partners.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.titles.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/titles/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.titles.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/titles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.titles.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.titles.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.titles.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/titles/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.titles.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/titles/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/titles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.titles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/titles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.titles.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.subscribers.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscribers/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.subscribers.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscribers/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.subscribers.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.subscribers.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.subscribers.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscribers/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.subscribers.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/subscribers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.subscribers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/subscribers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.subscribers.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.feedback.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedback/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.feedback.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedback/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.feedback.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.feedback.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.feedback.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedback/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.feedback.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/feedback/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.feedback.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/feedback/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.feedback.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.eventbacks.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/eventbacks/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.eventbacks.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/eventbacks/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.eventbacks.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.eventbacks.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.eventbacks.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/eventbacks/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.eventbacks.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/eventbacks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/eventbacks/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/eventbacks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.eventbacks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/eventbacks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.eventbacks.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.mailings.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mailings/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.mailings.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mailings/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.mailings.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.mailings.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.mailings.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mailings/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.mailings.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mailings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mailings/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/mailings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.mailings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/mailings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.mailings.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{menu}/builder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@builder',
        'as' => 'voyager.menus.builder',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@builder',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.order_item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{menu}/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@order_item',
        'as' => 'voyager.menus.order_item',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@order_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{menu}/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@delete_menu',
        'as' => 'voyager.menus.item.destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@delete_menu',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.item.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{menu}/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@add_item',
        'as' => 'voyager.menus.item.add',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@add_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.menus.item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/menus/{menu}/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@update_item',
        'as' => 'voyager.menus.item.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@update_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@index',
        'as' => 'voyager.settings.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@store',
        'as' => 'voyager.settings.store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@update',
        'as' => 'voyager.settings.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete',
        'as' => 'voyager.settings.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.move_up' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/{id}/move_up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_up',
        'as' => 'voyager.settings.move_up',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_up',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.move_down' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/{id}/move_down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_down',
        'as' => 'voyager.settings.move_down',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_down',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.settings.delete_value' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/{id}/delete_value',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete_value',
        'as' => 'voyager.settings.delete_value',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete_value',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@index',
        'as' => 'voyager.media.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@index',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@files',
        'as' => 'voyager.media.files',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@files',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.new_folder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/new_folder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@new_folder',
        'as' => 'voyager.media.new_folder',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@new_folder',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/delete_file_folder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@delete',
        'as' => 'voyager.media.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.move' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/move_file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@move',
        'as' => 'voyager.media.move',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@move',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.rename' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/rename_file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@rename',
        'as' => 'voyager.media.rename',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@rename',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@upload',
        'as' => 'voyager.media.upload',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@upload',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.media.crop' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/crop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@crop',
        'as' => 'voyager.media.crop',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@crop',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@index',
        'as' => 'voyager.bread.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@index',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/{table}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@create',
        'as' => 'voyager.bread.create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@create',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@store',
        'as' => 'voyager.bread.store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@store',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/{table}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@edit',
        'as' => 'voyager.bread.edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bread/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@update',
        'as' => 'voyager.bread.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@update',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bread/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@destroy',
        'as' => 'voyager.bread.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.relationship' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bread/relationship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@addRelationship',
        'as' => 'voyager.bread.relationship',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@addRelationship',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.bread.delete_relationship' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/delete_relationship/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@deleteRelationship',
        'as' => 'voyager.bread.delete_relationship',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@deleteRelationship',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/{database}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.database.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.compass.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/compass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'as' => 'voyager.compass.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'namespace' => NULL,
        'prefix' => 'admin/compass',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.compass.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/compass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'as' => 'voyager.compass.post',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'namespace' => NULL,
        'prefix' => 'admin/compass',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'voyager.voyager_assets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/voyager-assets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@assets',
        'as' => 'voyager.voyager_assets',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@assets',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'eventback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FeedbackController@eventback',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@eventback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'eventback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feedback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FeedbackController@feedback',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@feedback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FeedbackController@subscribe',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@subscribe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale.set' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@setLocale',
        'controller' => 'App\\Http\\Controllers\\PagesController@setLocale',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogsController@index',
        'controller' => 'App\\Http\\Controllers\\BlogsController@index',
        'namespace' => NULL,
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogsController@show',
        'controller' => 'App\\Http\\Controllers\\BlogsController@show',
        'namespace' => NULL,
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blog.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\NewsController@index',
        'namespace' => NULL,
        'prefix' => '/news',
        'where' => 
        array (
        ),
        'as' => 'news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\NewsController@show',
        'namespace' => NULL,
        'prefix' => '/news',
        'where' => 
        array (
        ),
        'as' => 'news.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\EventsController@index',
        'controller' => 'App\\Http\\Controllers\\EventsController@index',
        'namespace' => NULL,
        'prefix' => '/event',
        'where' => 
        array (
        ),
        'as' => 'event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\EventsController@show',
        'controller' => 'App\\Http\\Controllers\\EventsController@show',
        'namespace' => NULL,
        'prefix' => '/event',
        'where' => 
        array (
        ),
        'as' => 'event.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{page?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@getPage',
        'controller' => 'App\\Http\\Controllers\\PagesController@getPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pages.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
