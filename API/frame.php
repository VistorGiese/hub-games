<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");


    $frame[1] = array(
        "link" => "jogos/pirata/index1.html"
    );
    $frame[2] = array(
        "link" => "jogos/jogothiago/index.html"
    );

    $frame[3] = array(
     "link" => "jogos/ben10/index.html"
    );

    $frame[4] = array(
       "link" => "jogos/parabellum/index.html"
    );

    $frame[5] = array(
        "link" => "jogos/survivor/index.html"
    );


    echo json_encode($frame);

