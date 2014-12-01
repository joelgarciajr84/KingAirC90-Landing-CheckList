<?php
include "KingAirC90.class.php";
/*
Landing Requirements

Before landing
Pressurisation: Check
Cabin sign: FSB or NS/FSB
Prop autofeather: Arm
Prop synchrophaser: As desired
Flaps: Approach
Landing gear: Down
Lights: As required
Radar: Standby or off
Short final:
Props: High rpm
Power: Beta or reverse
Remove reverse at 40 kts

Balked landing

Power: Maximum
Props: Full forward
Airspeed: 95 kts until clear of obstacles
Flaps: Up
Gear: Up

After landing
Landing and taxi lights: As required
Ice protection: Off
Auto-ignition: Off
Electrics: Observe load limits
Trim: Set
Flaps: Up
Transponder and radar: Off
Strobes: Off

 */

$KingAirC90 = new KingAirC90();

//= array("BeforeLanding", "BalkedLanding", "AfterLanding")

//Before Landing

$KingAirC90->setPressurisation("Check");
$KingAirC90->setCabinSign("FSB");
$KingAirC90->setPropAutoFeather("Arm");
$KingAirC90->setPropSynchrophaser("As Desired");
$KingAirC90->setFlaps("Approach");
$KingAirC90->setLandingGear("Down");
$KingAirC90->setLights("As Required");
$KingAirC90->setRadar("off");

//Balked Landing

$KingAirC90->setPower("Maximum");
$KingAirC90->setProps("Full forward");
$KingAirC90->setAirSpeed(95);
$KingAirC90->setFlaps("up");
$KingAirC90->setLandingGear("up");

//After Landing

$KingAirC90->setLandingLights("As required");
$KingAirC90->setTaxiLights("As required");
$KingAirC90->setIceProtection("off");
$KingAirC90->setAutoIgnition("off");
$KingAirC90->setTransponder("off");
$KingAirC90->setStrobeLights("off");

$KingAirC90->PutTheBabyOnTheGround("AfterLanding");

?>