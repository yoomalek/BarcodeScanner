<?php
 $dbcon = pg_connect("host='192.168.2.222' user='sundaya' password='sundaya2019' dbname='demo'");
       
       // Cek Koneksi Ke Server Database

    if ($dbcon) // Jika Ada Koneksi
    {
        echo "Koneksi Database Sukses";
    }
    else
    {
        echo "Koneksi Database Gagal";
    }
    echo"<br>";
   $query = "SELECT * FROM test";
  $result = pg_query($dbcon, $query) or die('Query failed: ' . pg_last_error());

  // output result
  while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
   echo "Id: " . $line['id'] . "    Volt: " . $volt['volt'] . "<br/>";
  }

  // free result
  pg_free_result($result);

  // close connection
  pg_close($dbcon);
?> 