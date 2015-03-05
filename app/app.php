<?php
    require_once __DIR__."/../vendor/autoload.php"
    require_once __DIR__."/../src/jobs.php"

    session_start();

    if (empty($_SESSION['list_of_jobs'])) {
<<<<<<< HEAD
        $_SESSION['list_of_jobs'] = array();
=======
        $_SESSION['list_of_cities'] = array();
>>>>>>> f7ae9be675a153c138883af09d9749b0d5d99f11
    }

    $app= new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('job_name.php', array('jobs' => Job::getAll());
    });

<<<<<<< HEAD
    $app->post("/job_name", function() use ($app)) {
      $jobtitle = new Job($_POST['title']);
      $jobtitle->save();
      return $app['twig']->render('create_jobtitle.php', array('newjobtitle' => $jobtitle));
    });

      $app->post()
        ]
    }
=======
    $app->post("/jobname", function() use ($app))
>>>>>>> f7ae9be675a153c138883af09d9749b0d5d99f11

?>
