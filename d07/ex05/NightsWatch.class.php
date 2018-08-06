<?php
	
	class NightsWatch implements IFighter {
		private $fighter = array();

		public function recruit($hero) {
			$this->fighter[] = $hero;
		}

		public function fight() {
			foreach ($this->fighter as $hero) {
				if ($hero instanceof IFighter)
					$hero->fight();
			}
		}
	}
?>