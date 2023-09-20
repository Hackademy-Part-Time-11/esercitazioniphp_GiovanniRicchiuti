<?php

class Company {
    public $name;
    public $location;
    public $tot_employees = 0;
    public static $avg_wage = 1500;
    public static $total_employees = 0;
    
    public function __construct($name, $location, $tot_employees = 0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        self::$total_employees += $this->tot_employees;
    }

    public function numeroDipendenti() {
        if ($this->tot_employees > 0) {
            echo "L'azienda {$this->name} con sede in {$this->location} ha {$this->tot_employees} dipendenti \n";
        } else {
            echo "L'azienda {$this->name} con sede in {$this->location} non ha dipendenti \n";
        }
    }

    public function spesaAnnuale() {
        $spesaAnnuale = $this->tot_employees * self::$avg_wage * 12;
        echo "Spesa annuale per l'azienda {$this->name}: $spesaAnnuale \n";
    }
    
    public static function print_total_employees() {
        echo "Il totale assoluto di tutti i dipendenti di tutte le aziende è: \n" . self::$total_employees;
    }
}

$company1 = new Company("Aulab", "Bari", 50);
$company2 = new Company("Exprivia", "Molfetta", 75);
$company3 = new Company("Network", "Milano", 0);
$company4 = new Company("Pirelli", "Milano", 30);
$company5 = new Company("Iveco", "Torino", 0);

$company1->numeroDipendenti();
$company2->numeroDipendenti();
$company3->numeroDipendenti();
$company4->numeroDipendenti();
$company5->numeroDipendenti();

$company1->spesaAnnuale();
$company2->spesaAnnuale();
$company3->spesaAnnuale();
$company4->spesaAnnuale();
$company5->spesaAnnuale();

Company::print_total_employees(); 



class Contatore {
    public static $valore = 0;
    public static function azzera () {
        self::$valore = 0;
    }
}

echo "Valore corrente: " . Contatore::$valore . "\n";

Contatore::$valore = 10;
echo "Nuovo valore: " . Contatore::$valore . "\n";

Contatore::azzera();
echo "Valore dopo l'azzeramento: " . Contatore::$valore . "\n";



class Matematica {
    public static $risultato;

    public static function moltiplica($numeri) {
        self::$risultato = array_product($numeri);
    }

    public static function somma($numeri) {
        self::$risultato = array_sum($numeri);
    }

    public static function sottrai($a, $b) {
        self::$risultato = $a - $b;
    }

    public static function stampaRisultato() {
        echo "Risultato: " . self::$risultato . "\n";
    }
}


Matematica::moltiplica([2, 3, 4]);
Matematica::stampaRisultato(); 

Matematica::somma([10, 5, 3]);
Matematica::stampaRisultato(); 

Matematica::sottrai(20, 7);
Matematica::stampaRisultato(); 
