<?php

	class Scanner {
	    private $arr = [];
	    private $count = 0;
	    private $pointer = 0;
	    public function next() {
	        if($this->pointer >= $this->count) {
	            $str = trim(fgets(STDIN));
	            $this->arr = explode(' ', $str);
	            $this->count = count($this->arr);
	            $this->pointer = 0;
	        }
	        $result = $this->arr[$this->pointer];
	        $this->pointer++;
	        return $result;
	    }
	    public function hasNext() {
	        return $this->pointer < $this->count;
	    }
	    public function nextInt() {
	        return (int)$this->next();
	    }
	    public function nextDouble() {
	        return (double)$this->next();
	    }
	}
	
	class out {
	    public static function println($str = "") {
	        echo $str . PHP_EOL;
	    }
	}
	
	$sc = new Scanner();
	
	while (true) {
		$n = $sc->nextInt();
		if ($n === 0) {
			break;
		}
		
		$sum = 0;
		$array = [];
		for ($i = 0; $i < $n; $i++) {
			$array[$i] = $sc->nextInt();
			$sum += $array[$i];
		}
		
		$avg = $sum / $n;
		
		$count = 0;
		foreach ($array as $a) {
			if ((int)$avg >= $a) {
				++$count;
			}
		}
		out::println($count);
	}