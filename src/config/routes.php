<?php

$routes = [
    '/' => 'homeController@index',          // Route pour la page d'accueil
    '/accueil' => 'homeController@index',   // Alias pour la page d'accueil
    '/a-propos' => 'aboutController@index', // Route pour la page À propos
    '/chambres' => 'roomsController@index', // Route pour la page Chambres
    '/contact' => 'contactController@index' // Route pour la page Contact
];
