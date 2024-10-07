<?php

class roc_user
{

	function __construct($t)
	{
		$this->t = $t;
		//print_r($this->prio);
		$this->set_bobot_sub();
	}

	public function set_bobot_sub()
	{
		$t = $this->t;
		$bobot = [];
		for ($i = 1; $i <= $t; $i++) {
			$temp = 0;
			for ($j = $i; $j <= $t; $j++) {
				$temp += 1 / $j;
			}
			$temp = $temp / $t;
			$bobot[] = $temp;
		}

		$this->bobot_sub = $bobot;
	}
}
