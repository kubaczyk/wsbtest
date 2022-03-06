<?php

echo <<< TABLE
<table>
<tr>
<th>imie</th>
<th>nazwisko</th>
</tr>
TABLE;
for ($i=1; $i<=5; $i++) {
  echo <<< ROW
  <tr>
  <td>IMIE$i</td>
  <td>nazwisko$i</td>
  </tr>
  ROW;
}

echo "</table>";
?>
