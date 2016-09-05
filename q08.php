<?php
//1.Ededin faktorialini hesablayan Class yazin//

class Faktorial {

	public function hesabla($a) {
		$this->a = $a;
		$son = 1;

		for ($i = $this->a; $i >= 1; $i--) {
			$son = $son * $i;
		}
		echo $son;
	}
}
$hesabla = new Faktorial();
$hesabla->hesabla(20);

?>