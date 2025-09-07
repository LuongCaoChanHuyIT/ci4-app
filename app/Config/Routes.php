<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
if (file_exists(APPPATH . 'Routes/UserRouter.php')) {
    require APPPATH . 'Routes/UserRouter.php';
}
