<!doctype html>
<html lang="en">
<head>
	<title>Cursos Escogidos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<div id="wrapper">
	<header>
		<h1>Cursos Escogidos</h1>
	</header>
    <main>
    <div>
        <?php
        $curso1 = $_GET['curso1'];
        $codigo1 = $_GET['codigo1'];
        $seccion1 = $_GET['seccion1'];
        echo "Curso #1 ---> " . $curso1 . " - " . $codigo1 . " - " . $seccion1 . "<br />";
        
        $curso2 = $_GET['curso2'];
        $codigo2 = $_GET['codigo2'];
        $seccion2 = $_GET['seccion2'];
        echo "Curso #2 ---> " . $curso2 . " - " . $codigo2 . " - " . $seccion2 . "<br />";
        
        $curso3 = $_GET['curso3'];
        $codigo3 = $_GET['codigo3'];
        $seccion3 = $_GET['seccion3'];
        echo "Curso #3 ---> " . $curso3 . " - " . $codigo3 . " - " . $seccion3 . "<br />";
        
        $curso4 = $_GET['curso4'];
        $codigo4 = $_GET['codigo4'];
        $seccion4 = $_GET['seccion4'];
        echo "Curso #4 ---> " . $curso4 . " - " . $codigo4 . " - " . $seccion4 . "<br />";
        ?>
    </div>

	<p>¿Deseas confirmar su matrícula?</p>
    <h2><a href="confirm.php">Confirmar Matrícula</a></h2>
	<h2><a href="menu.php">Volver</a></h2>
    </main>
    <footer>Universidad de Puerto Rico de Ponce</footer>
</html>