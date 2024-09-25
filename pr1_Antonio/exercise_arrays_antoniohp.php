<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercice 01</h2>
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
        echo "<br><b>3.  Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump.</b><br><br>";
        unset($array['ciudad']);
        var_dump($array);
        ?>
</body>

</html>