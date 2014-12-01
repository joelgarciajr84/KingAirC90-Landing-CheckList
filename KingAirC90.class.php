<?php

class KingAirC90 {

	Private $Pressurisation;
	Private $CabinSign;
	Private $PropAutoFeather;
	Private $PropSynchrophaser;
	Private $Flaps;
	Private $LandingGear;
	Private $Lights;
	Private $Radar;
	Private $Props;
	Private $Power;
	Private $Reverse;
	Private $AirSpeed;
	Private $LandingLights;
	Private $TaxiLights;
	Private $StrobeLights;
	Private $IceProtection;
	Private $AutoIgnition;
	Private $Eletrics;
	Private $Trim;
	Private $Transponder;
	Private $LandingInformation;

	public function PutTheBabyOnTheGround($LandingInformation) {

		if ($LandingInformation == "BeforeLanding" || $LandingInformation == "BalkedLanding" || $LandingInformation == "AfterLanding") {

			$this->LandingInformation = $LandingInformation;
		} else {

			echo "Input Type Invalid";
		}

		switch ($this->GetLandingInformation()) {

			case 'BeforeLanding':

				//Pressurisation

				if ($this->GetPressurisation() != "Check") {

					echo "Abort Procedure, Check Pressurisation";
					die();
				} else {

					echo "Pressurisation -- OK  " . $this->GetPressurisation() . "<br>";
				}

				//Cabin Sign
				if ($this->GetCabinSign() != "FSB" && $this->GetCabinSign() !== "NS/FSB") {

					echo "Abort Procedure, Check Cabin Sign";

					die();
				} else {

					echo "Cabin Sign -- OK  " . $this->GetCabinSign() . "<br>";
				}

				//Prop AutoFeather
				if ($this->GetPropAutoFeather() != "Arm") {

					echo "Abort Procedure and check Prop Auto Feather";
					die();
				} else {

					echo "Prop Auto Feather -- OK  " . $this->GetPropAutoFeather() . "<br>";
				}

				//Prop SynchroPhaser

				if ($this->GetPropSynchrophaser() != "As Desired") {

					echo "Abort Procedure and check Prop SynchroPhaser";
					die();
				} else {

					echo "Prop SynchroPhaser -- OK  " . $this->GetPropSynchrophaser() . "<br>";
				}

				//Flaps

				if ($this->Getflaps() != "Approach") {

					echo "Abort Procedure and Check Flaps";
					die();
				} else {

					echo "Flaps -- OK  " . $this->GetFlaps() . "<br>";
				}

				// Landing Gear

				if ($this->GetLandingGear() != "Down") {

					echo "Abort Procedure and Check Landing Gear";
					die();
				} else {

					echo "Landing Gear -- OK  " . $this->GetLandingGear() . "<br>";
				}

				// Lights

				if ($this->GetLights() != "As Required") {

					echo "Check Lights <br>";

				} else {

					echo "Lights -- OK  " . $this->GetLights() . "<br>";
				}

				// Radar
				if ($this->GetRadar() != "StandBy" && $this->GetRadar() != "off") {

					echo "Abort Procedure Check Radar <br>";
				} else {

					echo "Radar -- OK  " . $this->GetRadar() . "<br>";
				}

				break;
			case 'BalkedLanding':

				echo "<h1> You are Now on Procedure for a Balked Landing </h1> <br>";
				echo "<h2> Check List Situation: <br> </h2>";

				//Power
				if ($this->GetPower() != "Maximum") {

					echo "Increase the Power to Maximum <br>";
				} else {

					echo "Power: " . $this->GetPower() . "<br>";
				}

				//Props
				if ($this->GetProps() != "Full forward") {

					echo "Get the Props Full forward <br>";
				} else {

					echo "Props: " . $this->GetProps() . "<br>";
				}

				//Air Speed

				if ($this->GetAirSpeed() != 95) {

					echo "Get the Airspeed 95 kts until clear the obstacles <br>";
				} else {

					echo "Air Speed: " . $this->GetAirSpeed() . "<br>";

				}

				//Flaps

				if ($this->GetFlaps() != "up") {

					echo "Put the Flaps up  :) <br>";
				} else {

					echo "Flaps: " . $this->GetFlaps() . "<br>";
				}

				//Landing Gear

				if ($this->GetLandingGear() != "up") {

					echo "Put the Landing Gear up <br>";
				} else {

					echo "Landing Gear: " . $this->GetLandingGear() . "<br>";
				}
				break;

			default:
				echo "<strong>Something Wrong!</strong>";
				break;
		}
	}
	//Setters

	public function setPressurisation($Pressurisation) {

		$this->Pressurisation = $Pressurisation;

	}
	public function setCabinSign($CabinSign) {

		$this->CabinSign = $CabinSign;

	}
	public function setPropAutoFeather($PropAutoFeather) {

		$this->PropAutoFeather = $PropAutoFeather;
	}

	public function setPropSynchrophaser($PropSynchrophaser) {

		$this->PropSynchrophaser = $PropSynchrophaser;

	}

	public function setFlaps($Flaps) {

		$this->Flaps = $Flaps;
	}

	public function setLandingGear($LandingGear) {

		$this->LandingGear = $LandingGear;

	}

	public function setLights($Lights) {

		$this->Lights = $Lights;
	}

	public function setRadar($Radar) {

		$this->Radar = $Radar;
	}

	public function setProps($Props) {

		$this->Props = $Props;

	}

	public function setPower($Power) {

		$this->Power = $Power;
	}

	public function setReverse($Reverse) {

		$this->Reverse = $Reverse;
	}

	public function setAirSpeed($AirSpeed) {

		$this->AirSpeed = $AirSpeed;

	}

	public function setLandingLights($LandingLights) {

		$this->LandingLights = $LandingLights;
	}

	public function setTaxiLights($TaxiLights) {

		$this->TaxiLights = $TaxiLights;

	}

	public function setStrobeLights($StrobeLights) {

		$this->StrobeLights = $StrobeLights;

	}

	public function setIceProtection($IceProtection) {

		$this->IceProtection = $IceProtection;
	}

	public function setAutoIgnition($AutoIgnition) {

		$this->AutoIgnition = $AutoIgnition;

	}

	public function setEletrics($Eletrics) {

		$this->Eletrics = $Eletrics;
	}

	public function setTrim($Trim) {

		$this->Trim = $Trim;
	}

	public function setTransponder($Transponder) {

		$this->Transponder = $Transponder;
	}

//Getters

	public function GetPressurisation() {

		return $this->Pressurisation;

	}
	public function GetCabinSign() {

		return $this->CabinSign;

	}
	public function GetPropAutoFeather() {

		return $this->PropAutoFeather;
	}

	public function GetPropSynchrophaser() {

		return $this->PropSynchrophaser;

	}

	public function GetFlaps() {

		return $this->Flaps;
	}

	public function GetLandingGear() {

		return $this->LandingGear;

	}

	public function GetLights() {

		return $this->Lights;
	}

	public function GetRadar() {

		return $this->Radar;
	}

	public function GetProps() {

		return $this->Props;

	}

	public function GetPower() {

		return $this->Power;
	}

	public function GetReverse() {

		return $this->Reverse;
	}

	public function GetAirSpeed() {

		return $this->AirSpeed;

	}

	public function GetLandingLights() {

		return $this->LandingLights;
	}

	public function GetTaxiLights() {

		return $this->TaxiLights;

	}

	public function GetStrobeLights() {

		return $this->StrobeLights;

	}

	public function GetIceProtection() {

		return $this->IceProtection;
	}

	public function GetAutoIgnition() {

		return $this->AutoIgnition;

	}

	public function GetEletrics() {

		return $this->Eletrics;
	}

	public function GetTrim() {

		return $this->Trim;
	}

	public function GetTransponder() {

		return $this->Transponder;
	}

	public function GetLandingInformation() {

		return $this->LandingInformation;

	}
}
?>