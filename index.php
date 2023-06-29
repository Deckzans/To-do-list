<?php include("./AgregarTarea.php") ?>
<!doctype html>
<html lang="en">

<head>
    <title>Aplicación de Tareas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style> 
    .subrayado{ 
        text-decoration: line-through;
    }
    </style>   
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container ">
        <br>
        <div class="card">
            <div class="card-header">
                Lista de tares
            </div>
            <div class="card-body">

                <div class="mb-3">
                    <form action="" method="post">
                        <label for="tarea" class="form-label">Tarea:</label>
                        <input type="text" class="form-control" name="tarea" id="tarea" aria-describedby="helpId" placeholder="Escriba Su tarea" require>
                        <input name="Agregar_Tarea" id="Agregar_Tarea" class="btn btn-primary mt-3" type="submit" value="Agregar_Tarea">
                    </form>
                </div>

                <ul class="list-group">
                    <?php

                    foreach ($registros as $registro) {   ?>

                        <li class="list-group-item">
                            <form action="" method="post"> 
                                <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
                                <input class="form-check-input float-start mx-1" name="completada" type="checkbox" onchange="this.form.submit()" value="<?php echo $registro['completada']; ?>" id="" <?php echo ($registro['completada']==1)?'checked':'';  ?>>
                            </form>

                            <!-- <?php echo $registro['completada'] ?> -->
                            <span class="float-start mx-1 <?php echo ($registro['completada']==1)?'subrayado':'';  ?> "> <?php echo $registro['tarea']; ?> </span>
                            <h6 class="float-start mx-1"> 
                            <a href="?id=<?php echo $registro['id']; ?>"> <span class="badge bg-danger"> x </span> </a> </a> 
                            </h6>
                        </li>
                    <?php } ?>




                </ul>

            </div>
            <div class="card-footer text-muted text-center">
                Prueba tecnica para Informatica electoral
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>