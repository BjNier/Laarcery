<?php
$persona1 = [
    'img' => 'resources/img/card01.jpg',
    'titulo' => 'Cliente',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona2 = [
    'img' => 'resources/img/card02.jpg',
    'titulo' => 'Panaderos ',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona3 = [
    'img' => 'resources/img/card03.jpg',
    'titulo' => 'Pastelera',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona4 = [
    'img' => 'resources/img/card04.jpg',
    'titulo' => 'Heladera',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona5 = [
    'img' => 'resources/img/card05.jpg',
    'titulo' => 'Cocineros',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona6 = [
    'img' => 'resources/img/card06.jpg',
    'titulo' => 'Hornera',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona7 = [
    'img' => 'resources/img/slide01.jpg',
    'titulo' => 'Galletas',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona8 = [
    'img' => 'resources/img/slide02.jpg',
    'titulo' => 'Pasteles',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$persona9 = [
    'img' => 'resources/img/slide03.jpg',
    'titulo' => 'Cookies',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$personas = [$persona1, $persona2, $persona3, $persona4, $persona5, $persona6, $persona7, $persona8, $persona9]
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaderos</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- menu de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- logo de la marca -->
        <a class="navbar-brand" href="#">
            <img src="resources/img/logo.png" alt="" style="width: 35px;"> IESTP "Perú Japón"
        </a>
    </nav>
    <!-- imagen principal -->
    <section class="border mt-1" style="height: 150px;">
        <h1 class="text-center mt-4">Panaderos</h1>
    </section>
    <!-- card de productos -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($personas as $persona) { ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <img src="<?php echo $persona['img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $persona['titulo'] ?></h5>
                                <p class="card-text"><?php echo $persona['descripcion'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <sript src="resources/bootstrap/js/bootstrap.min.js">
        </script>
</body>

</html>