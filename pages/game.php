<?php
    $dados = $dadosJogos->$codigo; 
    $dados2 = $dadosFrame->$codigo;
?>

<div class="banner">
    <img src="<?=$dados->banner?>" alt="<?=$dados->banner?>" class="w-100">
</div>
<div class="container">
    <h1 class="text-center"><?=$dados->nome?></h1>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?=$dados->poster?>" alt="<?=$dados->nome?>" class="w-100">
        </div>
        <div class="col-12 col-md-9">
            <p class="pes">
                <?=$dados->descricao?>
            </p>
        </div>
    </div>
    
    <h2 class="pes text-center">confira o jogo abaixo</h2>
    <div class="row">
    <?php
    $dados = $dadosJogos->$codigo; 
    ?>
    <div class="row text-center">
        <div class="col-12">
            <p class="pes text-center btn btn btn-warning rounded"><a style="text-decoration: none; color :white; " href="<?=$dados2->link?>" target="_blank">jogar agora</a></p>
        </div>
    </div>
    </div>

    <?php
    $dados = $dadosJogos->$codigo; 
    ?>
    <div class="row text-center">
        <div class="center">
            <div class="btn btn-danger w-25 ">
                <div class="col-12" >
                    <p class="text-center rounded"><?=$dados->requisitos?></p>
                </div>
            </div>
        </div>
    </div>

</div>