<?php
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//

$SIRALA = array("5", "4", "2", "3");
sort($SIRALA);
foreach ($SIRALA as $key => $val) {
	echo $val . "\n";
}

?>