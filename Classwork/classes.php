<?php
class Vehicles
{
  public $name;
  public $model;
  public $makeYear;
  public $color;
  public $fuelType;

  function __construct($name, $model, $makeYear, $color, $fuelType)
  {
    $this->name = $name;
    $this->model = $model;
    $this->makeYear = $makeYear;
    $this->color = $color;
    $this->fuelType = $fuelType;
  }

  function message()
  {
    return "This is $this->name $this->model";
  }
}

$vehicles1 = new Vehicles("Toyota", "Camry", 2019, "blue", "petrol");
$vehicles2 = new Vehicles("Honda", "Civic", 2018, "red", "petrol");
$vehicles3 = new Vehicles("Ford", "Focus", 2017, "Silver", "petrol");

class Ships extends Vehicles
{
  function __construct($name, $model, $makeYear, $color, $fuelType, public $shipType, public $cargoCapacity)
  {
    parent::__construct($name, $model, $makeYear, $color, $fuelType);
  }
}

$ship1 = new Ships("Ocean Voyager", "CargoShip123", 2022, "Blue", "Diesel", "Cargo Ship", 5000);
$ship2 = new Ships("Royal Wave", "LuxuryCruise789", 2023, "White", "Gasoline", "Luxury Cruise Ship", 2000);
$ship3 = new Ships("Thunderstrike", "Warship456", 2021, "Gray", "Nuclear", "Warship", 1500);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Classes</title>
</head>

<body>
  <div class="container pt-5">
    <p><?= $vehicles1->message() ?></p>
    <p><?= $vehicles2->message() ?></p>
    <p><?= $vehicles3->message() ?></p>
    <hr class="my-5">
    <p><?= $ship1->message() ?></p>
    <p><?= $ship2->message() ?></p>
    <p><?= $ship3->message() ?></p>

  </div>
</body>

</html>