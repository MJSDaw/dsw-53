<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="">
    <?php
        require_once "campoHTML.php";
        require_once "campoTexto.php";
        require_once "campoOculto.php";
        require_once "desplegable.php";
        require_once "checkbox.php";
        require_once "textarea.php";
        require_once "conEstilo.php";

        $campoTexto = new campoTexto("nombreUsuario", "", "Nombre de Usuario");
        echo $campoTexto->generaCodigoHTML() . "<br>";
        $campoOculto = new campoOculto("tipo", "registroUsuario");
        echo $campoOculto->generaCodigoHTML() . "<br>";
        $desplegable = new desplegable("marcaCoche", ['Mercedes', 'Opel', 'BMW']);
        echo $desplegable->generaCodigoHTML() . "<br><br>";
        $checkbox = new checkbox("terminos", "Acepta los Terminos y condiciones", "s");
        echo $checkbox->generaCodigoHTML() . "<br><br>";
        $textarea = new textarea("opinion", "", "Deja tu opinión aquí");
        $textarea->tipoLetra("font-family: Verdana;");
        echo $textarea->generaCodigoHTML() . "<br><br>";

    ?>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>