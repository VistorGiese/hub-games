<?php
    $dados = $dadosJogos->$codigo; 
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
            <p>
                <?=$dados->descricao?>
            </p>
        </div>
    </div>
    
    <h2 class="text-center">confira o jogo abaixo</h2>
    <div class="row">
        <?php
            $dadosFotos = file_get_contents("http://localhost/projeto-jogo-lal-2/api/frame.php");
            $dadosFotos = json_decode($dadosFrame);
            //só as fotos do jogo
            $dados = $dadosFrame->$codigo;

            
            foreach($dados as $frame) {
                ?>
                <div class="col-12 col-md-3">
                    <frame>
                        
                    </frame>
                </div>
                <?php
                
            }
        ?>
    </div>
</div>