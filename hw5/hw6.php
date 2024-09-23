<?php


interface Thinker {
    public function think(): string;
}
abstract class GeneralObject {
    public string $name;
    public bool $isAlive;

    public function __construct(string $name, bool $isAlive) {
        $this->name = $name;
        $this->isAlive = $isAlive;
    }

    public function getName(): string {
        return $this->name;
    }

    public static function getCurrentCity(): string { // Changed method name and return type
        return "Current City: Kirovograd\n"; // Set the city name
    }

    public function getStatus(): string {
        return $this->isAlive ? "Alive" : "Dead";
    }
}
trait SpecialThinking {
    public function thinkDinka(): string {
        return "I thinka dinka: \n";
    }
}
class Bus extends GeneralObject {
    protected int $specialNumber;

    public function __construct(string $name, bool $isAlive, int $specialNumber) {
        parent::__construct($name, $isAlive);
        echo "\nGreetings from $name. All aboard! \n";
    }

    public function getSpecialNumber(): int {
        return $this->specialNumber;
    }
}
final class Passenger extends GeneralObject implements Thinker {
    use SpecialThinking;

    private string $passportNumber;
    protected string $profession;

    public function __construct(string $name, bool $isAlive, string $passportNumber, string $profession) {
        parent::__construct($name, $isAlive);
        echo "\nWelcome aboard, $name! \n";
    }

    public function think(): string {
        return "Thinking... \n";
    }
}
class BusStop extends GeneralObject {
    private string $location;

    public function __construct(string $name, bool $isAlive, string $location) {
        parent::__construct($name, $isAlive);
        echo "\nArriving at $name stop. \n";
    }

    public function getLocation(): string {
        return $this->location;
    }
}
$bigBus = new Bus("BigBus", true, 5435);
$marshrutka = new Bus("Marshrutka", true, 323);
$tralik = new Bus("Tralik", true, 777);
$student = new Passenger("Student", true, "1457568356", "");
$babka = new Passenger("Babka", true, "34654751", "");
$programmer = new Passenger("Programmer", true, "6547251", "Programmer");
$konechka = new BusStop("Final Destination", false, "pochitas");
$simpleStop = new BusStop("Ordinary Stop", false, "freetas");
echo GeneralObject::getCurrentCity();