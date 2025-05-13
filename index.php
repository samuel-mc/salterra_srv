<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/salterra_srv");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Home'));
});

Flight::route('/our-tents', function () {
    Flight::render('our_tents.php', array('title' => 'Our Tents'));
});

Flight::route('/romantic-packages', function () {
    Flight::render('romantic_packages.php', array('title' => 'Romantic Packages'));
});

Flight::route('/experiences', function () {
    Flight::render('experiences.php', array('title' => 'Experiences'));
});

Flight::route('/membership', function () {
    Flight::render('membership.php', array('title' => 'Membership'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => 'About'));
});

Flight::route('/contact', function () {
    Flight::render('contact.php', array('title' => 'Contact'));
});

Flight::route('/privacy-notice', function () {
    Flight::render('privacy_notice.php', array('title' => 'Privacy Notice'));
});

Flight::route('/meetings-and-events', function () {
    Flight::render('meetings.php', array('title' => 'Meetings'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
