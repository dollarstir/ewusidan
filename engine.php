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
        '/home',
        function ($context) {
            return Viewer::view('main/index.php', $context);
        }
    ),

    new Route(
        '/services',
        function ($context) {
            return Viewer::view('main/serv.php', $context);
        }
    ),

    new Route(
        '/about',
        function ($context) {
            return Viewer::view('main/aboutus.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('main/contactus.php', $context);
        }
    ),

    new Route(
        '/applypassport',
        function ($context) {
            return Viewer::view('main/passp.php', $context);
        }
    ),

    new Route(
        '/applybirthcert',
        function ($context) {
            return Viewer::view('main/bcert.php', $context);
        }
    ),

    new Route(
        '/applybusinesscert',
        function ($context) {
            return Viewer::view('main/businessc.php', $context);
        }
    ),
]);
$router->launch();
