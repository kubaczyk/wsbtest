<?php
$name="Janusz";
echo "IMIE: $name<br>";
echo 'IMIE:$name<br>';

//heredoc
$surname="NOWAK";
$city="POZNan";
echo <<< E
imie i nazwisko: $name $surname <br>
Miasto:$city
<hr>
E;
//nowdoc
echo<<< 'E'
imie i nazwisko: $name $surname <br>
Miasto: $city <hr>
E;










?>
