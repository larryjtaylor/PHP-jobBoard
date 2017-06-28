<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Jobs.php";

    session_start();

    if (empty($_SESSION['list_of_jobs'])) {
        $_SESSION['list_of_jobs'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('jobs.html.twig', array('jobs' => Jobs::getAll()));
    });

    $app->post("/jobs", function() use ($app) {
        $jobs = new Jobs($_POST['jobs'], $_POST['time'], $_POST['location'], $_POST['description']);
        $jobs->save();
        return $app['twig']->render('create_jobs.html.twig', array('new_jobs' => $jobs));
    });

    $app->post("/delete_jobs", function() use ($app) {
        Jobs::deleteAll();
        return $app['twig']->render('delete_jobs.html.twig');
    });
    
    return $app;
?>
