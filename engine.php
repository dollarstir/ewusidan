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
            return Viewer::view('wizard/pas.php', $context);
        }
    ),

    new Route(
        '/applybirthcert',
        function ($context) {
            return Viewer::view('wizard/bcert.php', $context);
        }
    ),

    new Route(
        '/applybusinesscert',
        function ($context) {
            return Viewer::view('wizard/buz.php', $context);
        }
    ),

    new Route(
        '/renewpassport',
        function ($context) {
            return Viewer::view('wizard/repass.php', $context);
        }
    ),

    new Route(
        '/handler',
        function ($context) {
            return Viewer::view('wizard/pashandle.php', $context);
        }
    ),

    new Route(
        '/handler1',
        function ($context) {
            return Viewer::view('wizard/repashandler.php', $context);
        }
    ),

    new Route(
        '/nhistoghanacard',
        function ($context) {
            return Viewer::view('wizard/linknhis.php', $context);
        }
    ),

    new Route(
        '/gazette',
        function ($context) {
            return Viewer::view('wizard/gaw.php', $context);
        }
    ),

    new Route(
        '/chnagename',
        function ($context) {
            return Viewer::view('wizard/afname.php', $context);
        }
    ),

    new Route(
        '/changedateofbirth',
        function ($context) {
            return Viewer::view('wizard/afdate.php', $context);
        }
    ),
]);
$router->launch();
