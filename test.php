<?php

    $y = array("Address" => "BenSt", "Duration" => "fixed");
    $z = array("Address" => "25th", "Duration" => "limited");

    $x = new PageControllers("adp");
    $x->newView("BestPHPEverNow");
    $x->mvc['index']->addModelField("Address");
    $x->mvc['index']->addModelValid("Address",'/.*/');
    $x->mvc['index']->addModelValid("Duration",'/.*/');
    $x->mvc['index']->addModelData('index', $y);
    
    $x->mvc['BestPHPEverNow']->view->addPartial("index.php");
    $x->mvc['BestPHPEverNow']->view->addPartial("index.php");
    $x->mvc['BestPHPEverNow']->view->addShared("index.php");
    $x->mvc['BestPHPEverNow']->addModelValid("Address",'/1.*/', "Please ask the admin to help you!");
    $x->mvc['BestPHPEverNow']->addModelValid("Duration",'/.*/');
    $x->mvc['BestPHPEverNow']->addModelData('index', $y);
    $x->mvc['BestPHPEverNow']->addModelData('friends', $z);
    $x->paginateModels('BestPHPEverNow', 'index.php',0,2);
    $x->mvc['BestPHPEverNow']->view->removeDependency("shared","index.php");
    $x->mvc['BestPHPEverNow']->view->writePage("BestPHPEverNow");
    $x->save();
    echo json_encode($x);
    $x = $x->loadJSON();

    $x->newView("ForeverNew");
    
    echo "<br><br><br>";
    echo json_encode($x);
    