<?php
	Class I3Weather
	{
		private function kel2cel($kel) {
			return ($kel - 273.15) . " °C";
		}
		private function kel2fah($kel) {
			return ($kel * (9/5) - 459.67) . " °F";
		}
		private function kel($kel) {
			return $kel . " K";
		}
		public function degrees($unit, $data, $spacer = false) {
			$str = "";
			switch($unit):
				case 0:
					$str .= $this->kel($data["main"]["temp_max"]);
				break;
				case 1:
					$str .= $this->kel2cel($data["main"]["temp_max"]);
				break;
				case 2:
					$str .= $this->kel2fag($data["main"]["temp_max"]);
				break;
			endswitch;
			if($spacer)
				$str .= " ";
			return $str;
		}
		public function icon($data, $icons, $spacer = false) {
			$str = $icons[$data["weather"][0]["icon"]];
			if($spacer)
				$str .= " ";
			return $str;
		}
		public function description($data, $short = false, $spacer = false) {
			if($short):
				$str = $data["weather"][0]["main"];
			else:
				$str = ucwords($data["weather"][0]["description"]);
			endif;
			if($spacer)
				$str .= " ";
			return $str;
		}
	}
