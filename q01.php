<?php

//   Neticesi aşağıdakılar olan funksiya yazın

/*
ekranaYaz(); 								-->Boş
ekranaYaz('salam'); 						-->arg1: salam
ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,     arg2: heci,      arg3: necesen

 */

// ------------------1ci usul------------------
function ekranaYaz($args) {
	foreach ($args as $key => $value) {
		echo $value . "</br>";}

}

ekranaYaz(['salam', 'necesen', 'heci']);

//------------------ 2ci usul--------------------

// function ekranaYaz() {
// 	$deyisensayi = func_num_args();

// 	$deyisenlistesi = func_get_args();
// 	for ($i = 0; $i < $deyisensayi; $i++) {
// 		echo "arg $i " . $deyisenlistesi[$i] .  "<br />\n" ;
// 	}
// }

// ekranaYaz("salam", "heci", "necesen", "elsen");

?>