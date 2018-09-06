<?php

class ResearchSquare {

	/*
	 * Construct the class
	 *
	 * @param array   $range  a 2 length array representing the min and max of the range
	 * @param array   $factorMap  Associative array, key as factor and value as message to output
	 * @param string  $lineDelimiter  String to "glue" together each line
	 * @param string  $messageDelimiter  String to "glue" together each message
	 */
	public function __construct($range, $factorsMap, $lineDelimiter = "<br />", $messageDelimiter = " ") {
		$this->range = $range;
		$this->factorsMap = $factorsMap;
		$this->lineDelimiter = $lineDelimiter;
		$this->messageDelimiter = $messageDelimiter;
	}

	/* @property string  $lineDelimiter  String to "glue" together each line */
	protected $lineDelimiter;

	/* @property string  $messageDelimiter  String to "glue" together each message */
	protected $messageDelimiter;

	/* @property array   $factorMap  Associative array, key as factor and value as message to output */
	protected $factorsMap = [];

	/* @property array   $output  array of lines to output for solution */
	protected $output = [];


	/*
	 * Run the program. Counts through range and outputs messages at corresponding factors.
	 *
	 * @return void  No return, outputs directly with output function
	 */
	public function run() {

		for($i = $this->range[0]; $i <= $this->range[1]; $i++) {
			$this->output[] = $this->resolveLine($i);
		}

		$this->output();
	}

	/*
	 * Resolve line of a given number
	 *
	 * @param  int     $number  number to resolve line for
	 * @return string  line resolved from factors
	 */
	protected function resolveLine($number) {
		$factorFound = false;
		$line = [];
		foreach($this->factorsMap as $factor => $string) {
			if($number % $factor == 0) {
				$line[] = $string;
				$factorFound = true;
			}
		}

		if($factorFound) {
			return implode(" ", $line);
		}
		
		return $number;
	}

	/*
	 * Output solution
	 *
	 * @return void  No return, outputs
	 */
	protected function output() {
		echo implode($this->lineDelimiter, $this->output);
	}
}