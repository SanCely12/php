<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Argentina/Buenos_Aires');
//date_default_timezone_set('America/Bogota');

abstract class Persona{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    abstract public function imprimir();

}

class Cliente extends Persona{
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct(){
        $this->fechaAlta = date("d/m/Y H:i:s");
        $this->aTarjetas = array();
        $this->bActivo = true;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function agregarTarjeta($tarjeta){
        $this->aTarjetas[] = $tarjeta;
    }

    public function darDeBaja($fechaBaja){
        $this->bActivo = false;
        $this->fechaBaja = $fechaBaja;
    }

    public function imprimir(){
        
    }
}

class Tarjeta{
    private $numero;
    private $fechaDesde;
    private $fechaVto;
    private $tipo;
    private $cvv;

    const VISA = "Visa";
    const MASTERCARD = "Mastercard";
    const AMEX = "American Express";
    const NARANJA = "Naranja";
    const CABAL = "CABAL";

    public function __construct($tipo, $numero, $fechaVto, $cvv) {
        $this->numero = $numero;
        $this->fechaVto = $fechaVto;
        $this->tipo = $tipo;
        $this->cvv = $cvv;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

}

//Desarrollo del programa
$cliente1 = new Cliente();
$cliente1->dni = "54441551";
$cliente1->nombre = "Doris Barrientos";
$cliente1->correo = "doris@correo.com";
$cliente1->celular = "31556781234";
$tarjeta1 = new Tarjeta(Tarjeta::VISA, "4223750778806383", "01/2023", "275");
$tarjeta2 = new Tarjeta(Tarjeta::AMEX, "347572886751981", "07/2027", "136");
$tarjeta3 = new Tarjeta(Tarjeta::MASTERCARD, "5415620495970009", "12/2024", "742");
$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);

$cliente2 = new Cliente();
$cliente2->dni = "10185458524";
$cliente2->nombre = "Laura Cely";
$cliente2->correo = "laura@correo.com";
$cliente2->celular = "315852249224";
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::VISA, "4969508071710316", "08/2025", "865"));
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::MASTERCARD, "5149107669552238", "04/2025", "554"));

print_r($cliente1);
print_r($cliente2);

?>