<?php
    include "db_conn.php";
    $id = $_GET["id"];

    if (isset($_POST["submit"])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = "UPDATE `crud` SET `first_name` = '$first_name', `last_name`='$last_name', `email`='$email', `gender`='$gender' WHERE id = $id";

        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header("Location: index.php?msg=Registro atualizado com sucesso!");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Editar Usuário</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: blueviolet; color: black;"> 
    Edição de Usuário
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edite os Dados do Usuário</h3>
            <p class="text-mute" style="background-color: blueviolet; color: white; margin-left= 300px; margin-right= 300px;">Clique em Salvar para atualizar os dados</p>
        </div>

        <?php
        $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nome: </label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>"> 
                    </div>
                    
                    
                    <div class="col">
                        <label class="form-label">Sobrenome: </label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>"> </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>

                    <div class="form-group mb-3">
                    <label>Gênero: </label>
                        &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="Masculino" <?php echo ($row["gender"] == 'male') ? "checked" : ""; ?>>
                    <label for="male" class="form-input-label">Masculino</label>
                        &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="Feminino" <?php echo ($row["gender"] == 'female') ? "checked" : ""; ?>>
                        <label for="female" class="form-input-label">Feminino</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit" style="background-color: blueviolet;">Salvar</button>
                        <a href="index.php" class="btn btn-danger" style="background-color: black;">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjxkk+Q2h455rYXK/7HAuoJ1+014" cross origin="anonymous"></script>

    </body>

    </html>
