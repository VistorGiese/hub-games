<div class="container" >
  <form name="conta" action="contato" method="post">
    <div class="text-center py-2">
      <h1>
        <p class="my-3">entre em contato</p>
      </h1>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><p>digite seu email</p></label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label"><p>digite sua mensagem</p></label>
      <textarea class="form-control" rows="5" id="exampleInputPassword1"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">enviar!</button>
  </form>
  <br><br><br><br><br><br>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"] ?? NULL;
      $date = $_POST["date"] ?? NULL;
      $senha = $_POST["senha"] ?? NULL;
      $senhaConfirm = $_POST["senhaConfirm"] ?? NULL;
    function mensagem($msg){
      echo "<script>alert('{$msg}');history.back();</script>";
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensagem("Escreva um email válido");
    }
  }
?>