<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // keywords sind nicht Case-Sensitiv
    echo "Hello World<br>";
    ECHO "Hello World<br>";
    eCHo "Hello World";
    
    // PhP ist dynamisch Typisiert
    // Variablen sind Case-Sensitiv
    $color = "550blau"; 
    echo $color;
    echo "<br>";
    $Color = 5;
    echo $color;
    echo "<br>";
    $_float = 0.5;
    $boolean = false;
    echo $Color;
    echo "<br>Meine Zimmer ist ".$color;
    echo "<br>";
    echo $Color*$_float;
    echo "<br>";
    // echo $Color + $color;

    $cars = array("Volvo", "Toyota", "Renault");

    var_dump($cars);
    echo "<br>";
    echo $cars[2];
    echo "<br>";

    $animals = array("hund", 'katze', ["maus", "hamster", "ratte"]);
    var_dump($animals);
    echo "<br>";
    //"Items" aus Arrays können über ihren Index Angesprochen werden
    echo $animals[2][2];

    //Class definiert das "Aussehen" von Objekten
    class Car {
        public $farbe;
        public $model;

        public function __construct($farbe, $model){
            $this->farbe = $farbe;
            $this->model = $model;
        }

        public function message(){
            return "Meine Auto ist ".$this->farbe." ".$this->model;
        }
    }

    // Ein Object wird erstellt mit dem Keyword new und dem Aufruf der Klasse
    $myCar = new Car("black","Volvo");
    echo $myCar->message();
    echo "<br>";

    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    echo "<br>";
    $null = null;
    var_dump($_float);

    $x = (int)$_float;

    echo $x;

    $string = "8";

    // Typecasting ist möglich in PhP
    $y = (int)$string;
    echo "<br>";
    var_dump($y);
    $x = 11;
    // jede Grundrechenart kann mit nummerischen Variablen ausgeführt werden
    echo $y + $x;
    echo "<br>";
    echo $y % $x;
    echo "<br>";
    echo $y ** $x;
    echo "<br>";

    $z = 10;
    // $z wird um den Wert von $x erhöht
    echo $z += $x;
    echo "<br>";
    // $z wird um 2 reduziert ($z = $z -2)
    echo $z -= 2;
    echo "<br>";
    // Kurzform von $z = $z % $x
    echo $z %= $x;
    echo "<br>";
    // Vergleich ob 2 Variablen gleich sind
    var_dump($y == $x);
    echo "<br>";
    var_dump($z == $string);
    echo "<br>";
    var_dump($z === $string);
    echo "<br>";
    // Vergleich ob 2 Variablen ungleich sind
    var_dump($z !== $string);
    echo "<br>";
    var_dump($z != $string);

    $a = 7;
    $b = 7;
    $c = 8;
    echo "<br>";
    // a grösser b?
    var_dump($a > $b);
    echo "<br>";
    // a kleiner gleich b
    var_dump($a <= $b);
    echo "<br>";
    var_dump($a <= $c);
    $d = "Alex1";
    $e = "Alex2";
    echo "<br>";
    var_dump($d == $e);
    echo "<br>";
    var_dump($d < $e);

    $abc = "abc";
    $def = "def";
    // Konkatinieren (zusammenfügen) von Strings als Kurzschreibweise von
    // $abc = $abc.$def
    echo $abc .= $def;
    echo "<br>";
    echo $abc;




    ?>
</body>
</html>