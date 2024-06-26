<?php
$url = "https://tryy-hard.000webhostapp.com/api/equipe.php";

$dadosApi = file_get_contents($url);

$dadosEquipe = json_decode($dadosApi);
?>

<div class="container">
    <div class="row">
        <?php
            foreach($dadosEquipe as $dados) {
                ?>
                <div class="col-12 col-md-4">
                    <div class="card" data-aos="fade-right">
                        <img src="<?=$dados->foto?>"
                        alt="<?=$dados->nome?>" class="card-img-top">
                        <div class="card-text text-center">
                            <p><strong><?=$dados->nome?></strong></p>
                            <p>
                                <h2><?=$dados->cargo?></h2>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>

</div>