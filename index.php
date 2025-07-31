<?php
//echo getenv('MY_VARIABLE'); // Çıktı: MerhabaDunya
echo $_SERVER['REQFILE'];
echo "<br/>";
echo $_SERVER['REQURI'];
echo "<br/>";
echo 'THE REQUEST:' . $_SERVER['THEREQ'];
echo "<br/>";
echo 'TEMP VAR:' . $_SERVER['TEMPVAR'];