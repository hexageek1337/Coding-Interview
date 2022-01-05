<?php
/**
 * Factorial with Recursive
 */
class Factorialrecursive{
	public function hitung($angka){
		if ($angka <= 0) {
			return 1;
		} else {
			return $angka * $this->hitung($angka-1);
		}
	}
}

$go = new Factorialrecursive();
$start = microtime(true);
print($go->hitung(8).PHP_EOL);
$end = microtime(true);
print('Execution time: '.number_format(floatval($end - $start), 10).' seconds.');