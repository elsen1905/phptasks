<?php

// aşağıdakı kodun nəticəsinə salam! çıxması üçün boşluğun yerinə nə yazılmalıdır?

class a {
	public static function greet() {
		self::salam(); //public static olan zaman lazimdi $this->
	}
	protected function salam() {
		echo "salam!";
	}
}

a::greet();

?>
