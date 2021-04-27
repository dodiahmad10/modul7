<HTML>
<HEAD>
<TITLE> Penggunaan List </TITLE>
</HEAD>
<BODY>
<?php
$program = array('Bobo','Doraemon','Spiderman','dodi');
list($Majalah, $Komik, $Film,$director) = $program;
echo "Jenis Buku & Hiburan :";
echo "<br />";
echo "Cerpen : $Majalah";
echo "<br />";
echo "Cerita Bergambar : $Komik";
echo "<br />";
echo "Bioskop : $Film";
echo "<br />";
echo "Director : $director";
?>
</BODY>
</HTML>