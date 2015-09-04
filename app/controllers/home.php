<?php
/**
 * Created by PhpStorm.
 * User: sunilkolla
 * Date: 04/09/15
 * Time: 14:58
 */
$app->get('/', function() use($app) {
    $user = array( 'name' => 'Super hero');

    $app->render('home.html.twig', [
        'user' => $user
    ]);
})->name('home');