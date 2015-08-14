<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('check.html.twig');
    });

    $app->get("/anagrams", function() use($app)
    {
        $my_RepeatCounter = new RepeatCounter;
        $count = $my_RepeatCounter->countRepeats($_GET['check_word'], $_GET['string']);
        return $app['twig']->render('repeats.html.twig', array('count' => $count));
    });
