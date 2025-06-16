<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Datos de la canción</title>
<meta name="generator" content="WYSIWYG Web Builder 20 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@75..100,300..800&400&subset=latin&display=swap" rel="stylesheet">
<link href="css/haunted.css?v=73" rel="stylesheet">
<link href="css/idmusic.css?v=73" rel="stylesheet">
</head>
<body>
<div id="wb_headerLayoutGrid">
<div id="headerLayoutGrid">
<div class="col-1">
<nav id="wb_headerMenu" style="display:block;width:100%;z-index:0;">
<span><a href="./index.html" title="Inicio">Inicio</a></span><span><a href="./canciones.html" title="Canciones">Canciones</a></span><span><a href="./agradecimientos.html" title="agradecimientos">Agradecimientos</a></span>
</nav>
<div id="Html1" style="display:inline-block;width:98px;height:69px;z-index:1">
<?php
// Obtener el ID de la canción desde la URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar si el ID es válido
if ($id === null) {
    die('ID de canción no especificado');
}

// Cargar el archivo CSV
$csv_file = 'datasong/idmusicsv.csv';
$csv_data = array_map('str_getcsv', file($csv_file));

// Buscar los datos de la canción con el ID especificado
$cancion = null;
foreach ($csv_data as $row) {
    if ($row[0] == $id) {
        $cancion = $row;
        break;
    }
}

// Si no se encuentra la canción, mostrar un error
if ($cancion === null) {
    die('Canción no encontrada');
}

// Asignar los datos de la canción a variables
$nombre = $cancion[1];
$album = $cancion[2];
$creador = $cancion[3];
$opennotes = $cancion[4];
$letras = $cancion[5];   
$guitarra = $cancion[6];
$bajo = $cancion[7];
$segundag = $cancion[8];
$drum = $cancion[9];
$key = $cancion[10];
$imagen = $cancion[11];
$video = $cancion[12];
$link = $cancion[13];
?></div>
</div>
<div class="col-2">
<div id="wb_headerHeading" style="display:block;width:100%;z-index:2;">
<h1 id="headerHeading">Oz the hero</h1>
</div>
</div>
</div>
</div>
<div id="Html2" style="position:absolute;left:123px;top:103px;width:320px;height:218px;z-index:4">
<div style="display: flex; align-items: flex-start;">
    <img src="<?php echo $imagen; ?>" width="300" style="margin: 0 auto 0 0; display: block;">
    <div style="margin-left: 10px;">
        <strong><span style="font-size: 26px;"><span style="color: rgb(85, 57, 130); font-family: Verdana, Geneva, sans-serif;"><?php echo $nombre; ?></span><br><br></span></strong>
        <strong>&nbsp; <span style="font-family: Courier New, courier;"> </span><span style='color: rgb(255, 255, 255); font-family: "Courier New", courier;'>Album:</span></strong>
        <span style='color: rgb(255, 255, 255); font-family: "Courier New", courier;'><?php echo $album; ?></span><span style="font-family: Courier New, courier;"><br></span><br>
        <strong>&nbsp;<span style="color: rgb(255, 255, 255);"> <span style="font-family: Courier New, courier;">Creador:&nbsp;</span></span></strong>
        <span style='color: rgb(255, 255, 255); font-family: "Courier New", courier;'><?php echo $creador; ?></span><br><br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
        <a href="<?php echo $link; ?>" target="_blank">
            <img src="datasong/descargar.png" style="width: 266px; margin-top: -25px;">
        </a>
    </div>
    <p><br></p>
    <p><br></p>
</div>
</div>
<div id="Html4" style="position:absolute;left:123px;top:418px;width:595px;height:445px;z-index:5">
<tr>
    <td colspan="2" style="text-align: center; padding: 10px; margin-top: 100px;">
        <iframe width="100%" height="350" 
                src=<?php echo $video; ?>
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </td>
</tr>
</div>
<div id="Html3" style="position:absolute;left:758px;top:236px;width:576px;height:285px;z-index:6">
<div class="tabla-container-full">
    <div class="tabla-header">Instrumentos:</div>
    <table class="custom-instrumentos">
        <tbody>
            <tr>
                <td><img src="https://i.ibb.co/F4wWBWR8/bajo.png" class="icono-instrumento" alt="Guitarra">Guitarra</td>
                <td><img src="https://i.ibb.co/Zz7gvsd2/guitarra2da.png" class="icono-instrumento" alt="Guitarra 2da">Segundo G</td>
            </tr>
            <tr class="fila-valoracion">
                <td><?php echo $guitarra; ?></td>
                <td><?php echo $segundag; ?></td>
            </tr>
            <tr>
                <td style="null"><br></td>
                <td style="null"><br></td>
            </tr>
            <tr>
                <td><img src="https://i.ibb.co/F4wWBWR8/bajo.png" class="icono-instrumento" alt="Bajo">Bajo</td>
                <td><img src="https://i.ibb.co/27kFJt3Q/bateria.png" class="icono-instrumento" alt="Batería">Bater&iacute;a</td>
            </tr>
            <tr class="fila-valoracion">
                <td><?php echo $bajo; ?></td>
                <td><?php echo $drum; ?></td>
            </tr>
            <tr>
                <td style="null"><br></td>
                <td style="null"><br></td>
            </tr>
            <tr>
                <td colspan="2"><img src="https://i.ibb.co/zhrm8c50/teclado.png" class="icono-instrumento" alt="Teclado">Teclado</td>
            </tr>
            <tr class="fila-valoracion">
                <td colspan="2"><?php echo $key; ?></td>
            </tr>
        </tbody>
    </table>
</div></div>
<div id="Html5" style="position:absolute;left:843px;top:105px;width:491px;height:95px;z-index:7">
 
<!-- Tabla: Notas abiertas -->
<div class="tabla-container">
    <div class="tabla-header">Notas abiertas:</div>
    <div class="tabla-body">
        <?php if (strtolower(trim($opennotes)) === 'si'): ?>
            <span class="icono-verde">✔️</span>
        <?php else: ?>
            <span class="icono-rojo">❌</span>
        <?php endif; ?>
    </div>
</div>

<!-- Tabla: Vocales -->
<div class="tabla-container">
    <div class="tabla-header">Vocales:</div>
    <div class="tabla-body">
        <?php if (strtolower(trim($letras)) === 'si'): ?>
            <span class="icono-verde">✔️</span>
        <?php else: ?>
            <span class="icono-rojo">❌</span>
        <?php endif; ?>
    </div>
</div></div>
</body>
</html>