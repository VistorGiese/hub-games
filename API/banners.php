<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/projeto-jogo-lal-2/images/";

    $banners[0] = array("nome"=>"o mini espada",
    "imagem"=>"{$path}miniesapada.jpeg",
    "id_game"=>1);

    $banners[1] = array("nome"=>"a arte da ocultação",
    "imagem"=>"{$path}ninja.jpg",
    "id_game"=>2);

    $banners[2] = array("nome"=>"ben 10",
    "imagem"=>"{$path}ben-10.jpg",
    "id_game"=>3);

    $banners[3] = array("nome"=>"parabellum",
    "imagem"=>"{$path}parabellum.jpg",
    "id_game"=>4);

    $banners[4] = array("nome"=>"survivor",
    "imagem"=>"{$path}survivor.jpg",
    "id_game"=>5);


    echo json_encode($banners);