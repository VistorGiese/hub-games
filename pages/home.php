<?php
   
?>

<main>
    <section>
      <div style="padding-top: 10px; padding-bottom: 10px;">
        <div class="redline">
          <h1>
            Jogos mais comprados:
          </h1>
        </div>
      </div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">

        <?php 
         $url = "http://localhost/projeto-jogo-lal/API/games.php/";
         $dadosApi = file_get_contents($url);
         //transformar APi em Jsom
         $dadosJogos = json_decode($dadosApi);
         //print_r($dadosJogos);
          foreach($dadosJogos as $key => $item){
          
        ?>

        <div class="<?= $key == 1 ? 'carousel-item active' : 'carousel-item'; ?>">
           <a href="vendas/<?=$item->id?>"><img  src="<?= $item->images2?>" class="d-block w-100" alt="..."></a>   
        </div>

        <?php 
      }?>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="section-lancamentos">
      <div class="ms-5" style="color: red;">
        <h1>Lancamentos</h1>
      </div>
      <div class="row row-cols-2 row-cols-md-2 g-2 d-flex">
      <?php foreach($dadosJogos as $item){ 
        
        ?>

        <div class="col ps-5">
          <div class="card">
            <img src="<?=$item->images?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text btn btn-danger">"<?=$item->valor?>"</p>
            </div>
          </div>
        </div>
        <?php } ?>


      </div>
    </section>
    <section class="section-novidades">
      <div class="ms-5" style="color: red;">
        <h1>Novidades</h1>
      </div>
      <div class="row row-cols-2 row-cols-md-2 g-2 d-flex">
        <div class="col ps-5">
          <div class="card">
            <img src="imgs/VALORANT_phx_jett_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text btn btn-danger" style="color: aliceblue;">150,00$</p>
            </div>
          </div>
        </div>
        <div class="col pe-5">
          <div class="card">
            <img src="imgs/VALORANT_phx_jett_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text btn btn-danger">100,00$</p>
            </div>
          </div>
        </div>
        <div class="col ps-5">
          <div class="card">
            <img src="imgs/Valorant_Wallpaper_Killbanners_galleryimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text btn btn-danger">200,00$</p>
            </div>
          </div>
        </div>
        <div class="col pe-5">
          <div class="card">
            <img src="imgs/Valorant_Wallpaper_Killbanners_galleryimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Valorant</h5>
              <p class="card-text btn btn-danger">150,00$</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-tryhard">
      <div class="d-flex justify-content-between">
        <div class="d-flex flex-column gap-5 pe-5">
          <div class="position-relative">
            <button type="button" class="btn btn-primary position-absolute top-o end-0">
              visite nossa area tryhard
            </button>
          </div>
          <div class="">
            para quem ama extrair o maximo da gameplay
          </div>
        </div>
      </div>
    </section>
  </main>