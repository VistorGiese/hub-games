<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1] = array(
    "id" => 1,
    "nome" => "o mini espada",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "valor" => "R$200.00",
    "images" => "imgs/logo-tryhard.png",
    "images2" => "images/snake_logo1.jpg"
);

$jogo[2] = array(
    "id" => 2,
    "nome" => "arte da ocultacao",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "valor" => "R$150.00",
    "images" => "images/snake_img1.jpg",
    "images2" => "images/snake_logo1.jpg"
);

$jogo[3] = array(
    "id" => 3,
    "nome" => "ben 10",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "valor" => "R$250.00",
    "images" => "images/snake_img1.jpg",
    "images2" => "images/snake_logo1.jpg"
);

$jogo[4] = array(
    "id" => 4,
    "nome" => "parabelum",
    "descricao" => "O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.",
    "valor" => "R$300.00",
    "images" => "images/snake_img1.jpg",
    "images2" => "images/snake_logo1.jpg"
);




echo json_encode($jogo);