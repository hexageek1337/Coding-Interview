<?php
/**
 * Factorial with Looping
 */
class Factorialperulangan{
	private $totalAngka = 1;

	public function hitung($angka){
		if ($angka <= 0) {
			return $this->totalAngka;
		} else {
			for ($i=$angka; $i >= 1; $i--) {
				$this->totalAngka *= $i;
			}
			return $this->totalAngka;
		}
	}
}

$go = new Factorialperulangan();
$start = microtime(true);
print($go->hitung(8).PHP_EOL);
$end = microtime(true);
print('Execution time: '.number_format(floatval($end - $start), 10).' seconds.');