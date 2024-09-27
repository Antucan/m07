<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Arrays</h2>
        <?php
        echo "<b>1.  Crea un array asociatvo con los siguientes datos y claves.
nombre: Sara, apellido: Martinez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior utlizando foreach.  
</b><br><br>";
        $array = [
            "nombre" => 'Sara',
            "apellido" => 'Martinez',
            "edad" => 23,
            "ciudad" => 'Barcelona'
        ];
        $dato = 0;
        foreach ($array as $a => $b) {
            ++$dato;
            echo "dato $dato º: $b<br>";
        }
        echo "<br><b>2.  Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utlizando
foreach.  
</b><br><br>";
        foreach ($array as $a => $b) {
            echo "$a: $b<br>";
        }
        echo "<br><b>3.  Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.  
</b><br><br>";
        $array['edad'] = 24;
        $dato = 0;
        foreach ($array as $a => $b) {
            ++$dato;
            echo "dato $dato º: $b<br>";
        }
        echo "<br><b>4.  Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump.</b><br><br>";
        unset($array['ciudad']);
        var_dump($array);
        echo "<br><b>5.  Crear un nuevo array con un valor separado por coma a partir de la cadena de texto
letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente.</b><br><br>";
        $letters = "a,b,c,d,e,f";
        $total = explode(",", $letters);
        $orden = 0;
        arsort($total);
        foreach ($total as $t => $f) {
            echo "letter " . $t + 1. . "º: ";
            echo $total[$t];
            echo "<br>";
        }
        echo "<br><b>6.  Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociativo en el orden previo y muéstralos ordenados de
mayor a menor.
</b><br><br>";
        $notas = [
            "Miguel" => 5,
            "Luis" => 7,
            "Marta" => 10,
            "Isabel" => 8,
            "Aitor" => 4,
            "Pepe" => 1
        ];
        arsort($notas);
        echo "Notas de los estudiantes: ";
        foreach ($notas as $alumno => $nota) {
            echo "$alumno: $nota, ";
        }
        echo "<br><br><b>7.  Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 
</b><br><br>";
        $media = array_sum($notas) / 6;
        echo "Media de as notas: " . number_format($media, 2, ',') . "<br>";
        echo "Alumnos con nota por encima de la media: <br>";
        foreach ($notas as $alumno => $nota) {
            if ($nota > $media) {
                echo "$alumno, <br>";
            }
        }
        echo "<br><b>8.  Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. 
</b><br><br>";
        foreach ($notas as $alumno => $nota) {
            echo "La nota más alta es ";
            echo "$nota";
            echo " y el mejor alumno es ";
            echo "$alumno";
            break;
        }
        ?>
</body>

</html>