<?php
//echo getenv('MY_VARIABLE'); // Çıktı: MerhabaDunya
echo 'REQFILE:' .$_SERVER['REQFILE'];
echo "<br/>";
// REQURI , root'dan sonra gelen kısım
echo 'REQURI:' . $_SERVER['REQURI'];
echo "<br/>";
echo 'THE REQUEST:' . $_SERVER['THEREQ'];
echo "<br/>";
echo 'TEMP VAR:' . $_SERVER['TEMPVAR'];
#echo "<br/>";
#echo 'VAR2:' . $_SERVER['VAR2'];
echo 'PATH INFO:' . $_SERVER['PATH_INFO'];
echo "<br/>";

// Query string
echo 'QUERY STRING:' . $_SERVER['QUERY_STRING'];