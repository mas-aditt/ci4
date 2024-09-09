<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Post;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routes for Post Controller
$routes->get('post', [Post::class, 'index']);         // Menampilkan daftar post
$routes->get('post/create', [Post::class, 'create']); // Menampilkan form create post
$routes->post('post/create', [Post::class, 'store']); // Memproses form create post
$routes->get('post/edit/(:num)', [Post::class, 'edit/$1']);    // Menampilkan form edit post berdasarkan ID
$routes->post('post/update/(:num)', [Post::class, 'update/$1']); // Memproses update post
$routes->get('post/delete/(:num)', [Post::class, 'delete/$1']); // Menghapus post berdasarkan ID
