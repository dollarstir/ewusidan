<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/index.php', $context);
        }
    ),

    new Route(
        '/services',
        function ($context) {
            return Viewer::view('serv.php', $context);
        }
    ),

    new Route(
        '/about',
        function ($context) {
            return Viewer::view('aboutus.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('t/contactus.php', $context);
        }
    ),
]);
$router->launch();
