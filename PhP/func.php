<?php
  // Funktionen müssen mit einem _ (underscore) oder einem Buchstaben beginnnen
  // Der Codeblock der durch die geschweiften Klammern ({}) angezeigt wird
  // muss Vorhanden sein, kann aber leer sein
  function  _func(){};
  function funcNummerZwei(){};

  // Funktionen können ohne Parameter/Argumente definiert werden
  function writeMsg(){
    echo "Hello World";
    echo "<br>";
  }

  // Funktionen werden erst "Aktiv" wenn sie aufgrufen werden
  writeMsg();

  // Funktionen können mit Parametern/Argumenten deklariert werden
  // Wenn sie in den ()-Klammern Parameter haben, so muss sie auch beim
  // aufruf die passende Anzeahl übergeben bekommen
  function familyNameAndAge($fname, $age){
    echo "$fname. $age old";
    echo "<br>";
  }

  familyNameAndAge("Peter", 12);
  familyNameAndAge("Eberhard", 52);

  // Funktionen können Funktionen aufrufen
  function addNumbers($a, $b){
    $erg = 0;
    $erg = $a + $b;
    familyNameAndAge("Klaus", $erg);
    return $erg;
  }

  echo addNumbers(3,4);
  echo "<br>";
  
  // if-Bedingungen und Schleifen können in Funktionen benutzt werden
  function subNumber($a, $b){
    $erg = 0;
    $erg = $a - $b;
    if ($erg > 0) {
        return $erg;
    }else{
        return "Zahl ist kleiner oder gleich 0";
    }
  }

  echo subNumber(6,5);
  echo "<br>";
  echo subNumber(4, 9);

  // SwitchCase überprüft ob ein Fall zutrifft oder der Default-Block ausgeführt werden soll
  function switchCase($variable){

    switch ($variable) {
        case 1:
            echo $variable;
            break;
        case 2:
            echo $variable;
            break;
        case 3:
            echo $variable;
            break;
        case 4:
            echo $variable;
            break;
        default:
            echo "default";
            break;
    }
  }
  switchCase(9);
  echo "<br>";
  switchCase(1);
  echo "<br>";
  switchCase(2);
?>