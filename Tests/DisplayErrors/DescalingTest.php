<?php
require_once(__DIR__.'/../Actionwords.php');

class DescalingTest extends PHPUnit_Framework_TestCase {
  public $actionwords;
  public function setUp() {
    $this->actionwords = new Actionwords();

    // Given I handle coffee grounds
    $this->actionwords->iHandleCoffeeGrounds();
    // And I handle water tank
    $this->actionwords->iHandleWaterTank();
    // And I handle beans
    $this->actionwords->iHandleBeans();
  }

  public function testDescalingIsNeededAfter500Coffees() {
    // Given the coffee machine is started
    $this->actionwords->theCoffeeMachineIsStarted();
    // When I take "500" coffees
    $this->actionwords->iTakeCoffeeNumberCoffees("500");
    // Then message "Descaling is needed" should be displayed
    $this->actionwords->messageMessageShouldBeDisplayed("Descaling is needed");
  }
}
?>