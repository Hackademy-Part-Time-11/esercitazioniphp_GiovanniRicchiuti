<?php
class Continent {
    public $nameContinent; 
    public function __construct($continent) 
    { 
        $this->nameContinent = $continent; 
    } 
}

class Country extends Continent{
    public $nameCountry;
    public function __construct($country) 
    { 
        parent::__construct('Europa'); 
        $this->nameCountry = $country; 
    } 
}

class Region extends Country{
    public $nameRegion;
    public function __construct($region)
    {
        parent::__construct('Italia'); 
        $this->nameRegion = $region;
    }
}

class Province extends Region{
    public $nameProvince;
    public function __construct($province)
    {
        parent::__construct('Puglia'); 
        $this->nameProvince = $province;
    }
}

class City extends Province{
    public $nameCity;
    public function __construct($city)
    {
        parent::__construct('Bari'); 
        $this->nameCity = $city;
    }
}

class Street extends City{
    public $nameStreet;
    public function __construct($street)
    {
        parent::__construct($street);
        $this->nameStreet = $street;
    }
    
  
    public function getMyCurrentLocation() {
        echo "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}" ;
    }
}

$myLocation = new Street("Strada San Giorgio Martire 2d");
$myLocation->getMyCurrentLocation();



trait Sottacqua {
    public function sottacqua() {
        echo "respira sott'acqua";
    }
}

trait Ovipari {
    public function ovipari() {
        echo "sono un oviparo";
    }
}
trait Ruggisco {
    public function ruggisco() {
        echo "posso ruggire";
    }
}

class Animal {
    public function __construct() {
    }

    protected function printSpecialization($specialization) {
        echo "Sono un animale $specialization \n";
    }
}

class Vertebrates extends Animal {
    public function __construct() {
        parent::__construct();
        $this->printSpecialization("Vertebrato");
    }
}

class WarmBlooded extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->printSpecialization("a sangue caldo");
    }
}

class Mammals extends WarmBlooded {
    use ruggisco;
    public function __construct() {
        parent::__construct();
        echo "Argh! \n";
        $this->ruggisco();
    }
}

class Birds extends WarmBlooded {
    use Ovipari;
    
    public function __construct() {
        parent::__construct();
        echo "chip chip!\n";
        $this->ovipari();
    }
}

class ColdBlooded extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->printSpecialization("a sangue freddo");
    }
}

class Fish extends ColdBlooded {
    use Sottacqua;
    
    public function __construct() {
        parent::__construct();
        echo "Splash! \n";
        $this->sottacqua();
    }
}

class Reptiles extends ColdBlooded {
    use Ovipari;
    
    public function __construct() {
        parent::__construct();
        echo "Frrrrr! \n";
        $this->ovipari();
    }
}

class Amphibians extends ColdBlooded {
    use Sottacqua;
    
    public function __construct() {
        parent::__construct();
        echo "Cra cra! \n";
        $this->sottacqua();
    }
}

$magikarp = new Fish();
$serpente = new Reptiles();
$rana = new Amphibians();
$leone = new Mammals();
$uccello = new Birds();





