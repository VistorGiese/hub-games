<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://tryy-hard.000webhostapp.com/images/";

    $banners[0] = array("nome"=>"o mini espada",
    "imagem"=>"{$path}miniespada.jpg",
    "id_game"=>1);

    $banners[1] = array("nome"=>"a arte da ocultação",
    "imagem"=>"{$path}ninja.jpg",
    "id_game"=>2);

    $banners[2] = array("nome"=>"ben 10",
    "imagem"=>"{$path}ben-10.jpg",
    "id_game"=>3);

    $banners[3] = array("nome"=>"parabellum",
    "imagem"=>"{$path}parabellum.png",
    "id_game"=>4);

    $banners[4] = array("nome"=>"survivor",
    "imagem"=>"{$path}survivor.png",
    "id_game"=>5);


    echo json_encode($banners);