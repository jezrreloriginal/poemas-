<?php 
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['celular']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CADASTRO DE FUNCIONÁRIOS</title>
  
</head>
<body>
<div class="box">
      <form action="formulario.php" method="POST" >
        <fieldset>
            <legend> <b> Formulario de cadastro</b></legend>
            <br>
<div class="inputBox">
    <input type="text" name="nome" id="name" class="inputUser">
    <label for="nome" class="labelinput" aria-placeholder="Nome Completo"> Nome Completo</label>
</div>
<br><br>
<div class="inputBox">
    <input type="text" name="email" id="email" class="inputUser">
    <label for="email" class="labelinput">E-mail </label>
</div><br><br>

<div class="inputBox">
    <input type="celular" name="celular" id="celular" class="inputUser">
    <label for="celular"class="labelinput"> Celular</label>
</div><br><br>
<p> Sexo</p>
<input type="radio" name="genero" valor="feminino" required >
<label for="feminino">Feminino</label><br><br>

<input type="radio" name="genero" valor="Masculino" required >
<label for="Masculino">Masculino</label><br><br>

<input type="radio" name="genero" valor="Outro" required >
<label for="Outro">Outro</label><br><br><br>

<label for="data-nascimento">Data de nascimento  </label>
<input type="date" name="data-nascimento" id="data-nascimento" ><br><br><br>
    


<div class="inputBox">
    <input type="text" name="cidade" id="cidade" class="inputUser">
    <label for="cidade"class="labelinput">Cidade </label>
</div><br><br>


<div class="inputBox">
    <input type="text" name="estado" id="estado" class="inputUser">
    <label for="estado"class="labelinput">Estado </label>
</div><br><br>
<div class="inputBox">
    <input type="text" name="endereco" id="endereco" class="inputUser">
    <label for="endereco"class="labelinput">Endereço </label>
</div><br><br>
<input type="submit" id="submit">
        </fieldset>
    </form>
</div>



</body>
</html>
