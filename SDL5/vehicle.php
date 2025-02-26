<?php
// Base class: Vehicle
class Vehicle {
    protected $brand;
    protected $model;
    protected $year;
    protected $price;

    public function __construct($brand, $model, $year, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    public function displayInfo() {
        return "
            <p>Brand: $this->brand</p>
            <p>Model: $this->model</p>
            <p>Year: $this->year</p>
            <p>Price: \$$this->price</p>
        ";
    }
}

// Derived class: Car
class Car extends Vehicle {
    private $numDoors;

    public function __construct($brand, $model, $year, $numDoors, $price) {
        parent::__construct($brand, $model, $year, $price);
        $this->numDoors = $numDoors;
    }

    public function displayInfo() {
        $parentInfo = parent::displayInfo();
        return $parentInfo . "<p>Number of Doors: $this->numDoors</p>";
    }
}

// Derived class: Truck
class Truck extends Vehicle {
    private $payloadCapacity;
    private $towingCapacity;

    public function __construct($brand, $model, $year, $payloadCapacity, $towingCapacity, $price) {
        parent::__construct($brand, $model, $year, $price);
        $this->payloadCapacity = $payloadCapacity;
        $this->towingCapacity = $towingCapacity;
    }

    public function displayInfo() {
        $parentInfo = parent::displayInfo();
        return $parentInfo . "
            <p>Payload Capacity: $this->payloadCapacity lbs</p>
            <p>Towing Capacity: $this->towingCapacity lbs</p>
        ";
    }
}

// Function to calculate price based on brand, model, and year
// Function to calculate price based on brand, model, and year
function calculatePrice($brand, $model, $year) {
    // Example price calculation (this can be replaced with actual logic)
    $basePrice = 20000;
    
    // Brand-specific adjustments
    if ($brand == "Toyota") {
        $basePrice += 5000;
    } elseif ($brand == "Ford") {
        $basePrice += 3000;
    } elseif ($brand == "Honda") {
        $basePrice += 4000;
    } elseif ($brand == "Nissan") {
        $basePrice += 3500;
    } elseif ($brand == "Volkswagen") {
        $basePrice += 4500;
    } elseif ($brand == "Kia") {
        $basePrice += 3000;
    } elseif ($brand == "Hyundai") {
        $basePrice += 3500;
    } elseif ($brand == "BMW") {
        $basePrice += 10000;
    } elseif ($brand == "Mercedes-Benz") {
        $basePrice += 12000;
    } elseif ($brand == "Audi") {
        $basePrice += 11000;
    }
    
    // Model-specific adjustments
    if ($model == "Corolla") {
        $basePrice += 1000;
    } elseif ($model == "F-150") {
        $basePrice += 2000;
    } elseif ($model == "Civic") {
        $basePrice += 1200;
    } elseif ($model == "Altima") {
        $basePrice += 1500;
    } elseif ($model == "Golf") {
        $basePrice += 1800;
    } elseif ($model == "Optima") {
        $basePrice += 1600;
    } elseif ($model == "Elantra") {
        $basePrice += 1400;
    } elseif ($model == "3 Series") {
        $basePrice += 3000;
    } elseif ($model == "C-Class") {
        $basePrice += 3500;
    } elseif ($model == "A4") {
        $basePrice += 3200;
    }
    
    // Year-specific adjustment
    if ($year > 2020) {
        $basePrice += 1000;
    }
    
    return $basePrice;
}


if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    
    // Validation check
    if ($brand == "Toyota" && $model != "Corolla") {
        echo "<script>alert('Invalid model for Toyota brand. Please select Corolla.');</script>";
    } elseif ($brand == "Ford" && $model != "F-150") {
        echo "<script>alert('Invalid model for Ford brand. Please select F-150.');</script>";
    } elseif ($brand == "Honda" && $model != "Civic") {
        echo "<script>alert('Invalid model for Honda brand. Please select Civic.');</script>";
    } elseif ($brand == "Nissan" && $model != "Altima") {
        echo "<script>alert('Invalid model for Nissan brand. Please select Altima.');</script>";
    } elseif ($brand == "Volkswagen" && $model != "Golf") {
        echo "<script>alert('Invalid model for Volkswagen brand. Please select Golf.');</script>";
    } elseif ($brand == "Kia" && $model != "Optima") {
        echo "<script>alert('Invalid model for Kia brand. Please select Optima.');</script>";
    } elseif ($brand == "Hyundai" && $model != "Elantra") {
        echo "<script>alert('Invalid model for Hyundai brand. Please select Elantra.');</script>";
    } elseif ($brand == "BMW" && $model != "3 Series") {
        echo "<script>alert('Invalid model for BMW brand. Please select 3 Series.');</script>";
    } elseif ($brand == "Mercedes-Benz" && $model != "C-Class") {
        echo "<script>alert('Invalid model for Mercedes-Benz brand. Please select C-Class.');</script>";
    } elseif ($brand == "Audi" && $model != "A4") {
        echo "<script>alert('Invalid model for Audi brand. Please select A4.');</script>";
    } else {
        $price = calculatePrice($brand, $model, $year);
        
        // Create a Car or Truck instance based on model
        if ($model == "Corolla") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "F-150") {
            $vehicle = new Truck($brand, $model, $year, 3000, 14000, $price);
        } elseif ($model == "Civic") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "Altima") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "Golf") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "Optima") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "Elantra") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "3 Series") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "C-Class") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        } elseif ($model == "A4") {
            $vehicle = new Car($brand, $model, $year, 4, $price);
        }
        
        echo "<div class='vehicle-info'>";
        echo "<h2 class='vehicle-type'>Vehicle Information</h2>";
        echo $vehicle->displayInfo();
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Information</title>
    <link rel="stylesheet" href="vehicle.css">
</head>
<body>

    <form action="" method="post">
        <label for="brand">Brand:</label>
        <select id="brand" name="brand">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Honda">Honda</option>
            <option value="Nissan">Nissan</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Kia">Kia</option>
            <option value="Hyundai">Hyundai</option>
            <option value="BMW">BMW</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Audi">Audi</option>
        </select><br><br>
        <label for="model">Model:</label>
        <select id="model" name="model">
            <option value="Corolla">Corolla</option>
            <option value="F-150">F-150</option>
            <option value="Civic">Civic</option>
            <option value="Altima">Altima</option>
            <option value="Golf">Golf</option>
            <option value="Optima">Optima</option>
            <option value="Elantra">Elantra</option>
            <option value="3 Series">3 Series</option>
            <option value="C-Class">C-Class</option>
            <option value="A4">A4</option>
        </select><br><br>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
