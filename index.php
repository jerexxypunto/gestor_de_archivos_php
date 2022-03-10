<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de base de datos</title>

    <!-- Links de estilos css -->
    <link rel="stylesheet" href="./css/gsc-bootsrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    

    <!-- Configuraciones del gestor -->
    <?php require_once 'settings-gestor.php' ?>

</head>
<body>
    <div class="container">
        <h1>Gestor de datos</h1>
        <main>
            <?php
                // Guardo el resultado de la consulta en una variable
                $directorio_array = gestor('./');
                echo "<div class='caja-de-directorio'>";
                foreach ($directorio_array as $key => $value) {
                    
                    if(is_dir($value)){
                        if($value !== ".." && $value !== "."){
                            echo "<a href='?data-link=$value' class='d-block folder'><span class='fas fa-folder'></span> $value</a>";
                        }
                    }else{
                        echo "<a href='?data-link=$value' class='d-block file'><span class='fas fa-file'></span> $value</a>";
                    }
                }
                echo "</div>";
            ?>
        </main>
        <aside>
            <?php 
                if(isset($_GET['data-link'])){
                    $dato = $_GET['data-link'];
                    ?>
                        <iframe id="box-iframe" src="./" class="border border-secondary mt-2" width="100%" height="400"></iframe>
                        <script>
                            const boxIframe = document.querySelector("#box-iframe");
                            const host = window.location.host; // obtengo el dominio
                            const path = (window.location.pathname).split('/'); // obtengo la ruta

                            const ruta = `http://${host}/${path[1]}/<?php echo $dato;?>`; // ruta construida con variable php $dato
                        </script>
                    <?php
                }
            ?>
        </aside>
    </div>
</body>
<script src="js/app.js"></script>
</html>