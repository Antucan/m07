<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercice 04</h2>
        <?php
        echo "<b>1. Genere un número aleatorio entre el 1 y el 6 para simular la Ɵrada de un dado. 
</b><br><br>";
        $dado = rand(1, 6);
        echo "$dado<br><br>";
        echo "<b>2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara 
opuesta. (1:5, 2:6, 3:4) 
</b><br><br>";
        echo "Numero: " . $dado;
        switch ($dado) {
            case 1:
                echo " | Uno";
                echo " | 5";
                break;
            case 2:
                echo " | Dos";
                echo " | 6";
                break;
            case 3:
                echo " | Tres";
                echo " | 4";
                break;
            case 4:
                echo " | Cuatro";
                echo " | 3";
                break;
            case 5:
                echo " | Cinco";
                echo " | 1";
                break;
            case 6:
                echo " | Seis";
                echo " | 2";
                break;
            default:
                # code...
                break;
        }
        ?>
</body>

</html>