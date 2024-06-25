<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/projeto-jogo-lal-2/images/";

    $equipe[1] = array("nome"=>"Vitor Giese ",
    "cargo"=>"Criador do jogo Diego, o mini espada",
    "foto"=>"{$path}perfil.jpeg");

    $equipe[2] = array("nome"=>"Thiago",
    "cargo"=>"Criador do jogo A arte da ocultação",
    "foto"=>"{$path}thiago.png");

    $equipe[3] = array("nome"=>"João Felipe Bosco Brigato",
    "cargo"=>"Criador do jogo ben 10",
    "foto"=>"{$path}joão.jpeg");

    $equipe[4] = array("nome"=>"Bruno Gotardo",
    "cargo"=>"Criador do jogo parabellum",
    "foto"=>"{$path}anonimo.jpeg");

    $equipe[5] = array("nome"=>"Lucas",
    "cargo"=>"Criador do jogo survivor",
    "foto"=>"{$path}anonimo.jpeg");


    echo json_encode($equipe);