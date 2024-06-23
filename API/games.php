<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/projeto-jogo-lal-2/images/";

    $games[1] = array("id"=>1,
    "nome"=>"mini espada",
    "descricao"=>"o destemido Capitão 'diego, o espada pequena' em uma busca desesperada pelo tesouro perdido,
    roubado pelo infame pirata Mike Tonelada. Armado apenas com sua mini espada, Diego enfrenta
    tempestades violentas, batalhas navais épicas e segredos sombrios do passado enquanto busca
    reivindicar o que é seu por direito. Em uma jornada repleta de perigos e reviravoltas
    emocionantes, o destino do Capitão Diego e o tesouro perdido são postos à prova em uma
    batalha final que decidirá o seu destino.",
    "poster"=>"{$path}poster1.jpeg",
    "banner"=>"{$path}miniespada.jpg",
);

    $games[2] = array("id"=>2, "nome"=>"a arte da ocultação",
     "descricao"=>"Você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado.",
    "poster"=>"{$path}poster2.jpeg",
    "banner"=>"{$path}ninja.jpg",
);

    $games[3] = array("id"=>3, "nome"=>"ben 10",
     "descricao"=>"descricao jogo ben 10",
    "poster"=>"{$path}poster3.jpeg",
    "banner"=>"{$path}ben-10.jpg",
    );

    $games[4] = array("id"=>4, "nome"=>"parabelum",
     "descricao"=>"descricao jogo parabelum",
    "poster"=>"{$path}poster4.jpeg",
    "banner"=>"{$path}parabellum.jpg",
    );

    $games[5] = array("id"=>5, "nome"=>"survivor",
    "descricao"=>"descricao jogo survivor",
    "poster"=>"{$path}poster5.jpeg",
    "banner"=>"{$path}survivor.jpg",
    );

    echo json_encode($games);