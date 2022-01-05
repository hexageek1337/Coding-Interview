<?php
/**
 * Factorial with Tail Recursive
 */
class Factorialtailrecursive{
	public function hitung($total, $angka){
		if ($angka <= 0) {
			return $total;
		} else {
			return $this->hitung($total*$angka, $angka-1);
		}
	}
}

$go = new Factorialtailrecursive();
$start = microtime(true);
print($go->hitung(1,8).PHP_EOL);
$end = microtime(true);
print('Execution time: '.number_format(floatval($end - $start), 10).' seconds.');