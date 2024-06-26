<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://tryy-hard.000webhostapp.com/images/";

    $games[1] = array("id"=>1,
    "nome"=>"mini espada",
    "descricao"=>"<p>o destemido Capitão 'diego, o espada pequena' em uma busca desesperada pelo tesouro perdido,
    roubado pelo infame pirata Mike Tonelada. Armado apenas com sua mini espada, Diego enfrenta
    tempestades violentas, batalhas navais épicas e segredos sombrios do passado enquanto busca
    reivindicar o que é seu por direito. Em uma jornada repleta de perigos e reviravoltas
    emocionantes, o destino do Capitão Diego e o tesouro perdido são postos à prova em uma
    batalha final que decidirá o seu destino.</p>",
    "poster"=>"{$path}poster1.jpeg",
    "banner"=>"{$path}miniespada.jpg",
    "requisitos" =>"memoria: 2gb de RAM
    <br>
    processador: Pentium b960
    <br>
    SO:windows XP ou superior
    <br>
    navegador: chrome, opera ou safari
    <br>
    Perifericos: mouse e teclado",
);

    $games[2] = array("id"=>2, "nome"=>"a arte da ocultação",
     "descricao"=>"Você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado.",
    "poster"=>"{$path}poster2.jpeg",
    "banner"=>"{$path}ninja.jpg",
    "requisitos" =>"memoria: 2gb de RAM
    <br>
    processador: Pentium b960
    <br>
    SO:windows XP ou superior
    <br>
    navegador: chrome, opera ou safari
    <br>
    Perifericos: mouse e teclado",
);

    $games[3] = array("id"=>3, "nome"=>"ben 10",
     "descricao"=>"Em Ben 10: A Batalha pelos Fragmentos, o jovem herói Ben Tennyson enfrenta sua maior ameaça até agora. Vilgax, o infame conquistador alienígena, conseguiu roubar o Omnitrix, o poderoso relógio que permite a Ben se transformar em uma variedade de alienígenas. Sem o Omnitrix, Ben está vulnerável e precisa encontrar uma maneira de recuperá-lo antes que Vilgax use seu poder para dominar o universo.",
    "poster"=>"{$path}poster3.jpeg",
    "banner"=>"{$path}ben-10.jpg",
    "requisitos" =>"memoria: 2gb de RAM
    <br>
    processador: Pentium b970
    <br>
    SO:windows XP ou superior
    <br>
    navegador: chrome, opera ou safari
    <br>
    Perifericos: mouse e teclado",
    );

    $games[4] = array("id"=>4, "nome"=>"parabelum",
     "descricao"=>"Prepare-se para uma experiência frenética de ação e estratégia com 'Parabellum', um jogo de tiro top-down implacável que combina a estética retrô com jogabilidade eletrizante, no estilo de Hotline Miami. Mergulhe em um mundo sombrio e violento onde cada movimento e decisão podem ser a diferença entre a vida e a morte.",
    "poster"=>"{$path}poster4.jpeg",
    "banner"=>"{$path}parabellum.jpg",
    "requisitos" =>" memoria: 2gb de RAM
    <br>
    processador: Pentium b977
    <br>
    SO:windows XP ou superior
    <br>
    navegador: chrome, opera ou safari
    <br>
    Perifericos: mouse e teclado",
    );

    $games[5] = array("id"=>5, "nome"=>"survivor",
    "descricao"=>"suja de ordas de zumbis para sobreviver, acumule pontos e faça o maior ranking da sua historia",
    "poster"=>"{$path}poster5.jpeg",
    "banner"=>"{$path}survivor.jpg",
    "requisitos" =>"memoria: 2gb de RAM
    <br>
    processador: Pentium b960
    <br>
    SO:windows XP ou superior
    <br>
    navegador: chrome, opera ou safari
    <br>
    Perifericos: mouse e teclado",
    );

    echo json_encode($games);