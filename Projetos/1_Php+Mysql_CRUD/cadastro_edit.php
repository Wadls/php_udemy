<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php
        include "connect.php";
        $id = $_GET['id'] ?? '';
        $sql = " SELECT * FROM pessoa WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn,$sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>
    
    <div class= "container">
        <div class= "row">
            <div class= "column">
                <h1 class="display-4 fw-bold">Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                    <br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>    <!-- class= "btn btn-primary" -->
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">
                </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
