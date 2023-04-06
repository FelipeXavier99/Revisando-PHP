<?php
	class Carro{
		public $motor, $modelo, $cor, $marca, $ano, $cambio;

	
		  public function setMotor ($motor)
        {
           $this->motor=$motor;    
      }
         public function getMotor ()
     {
         return $this->motor;
       }

        public function setModelo ($modelo)
  {
        $this->modelo=$modelo;    
       }
        public function getModelo ()
    {
       return $this->modelo;
        }

      public function setCor ($cor)
    {
        $this->cor=$cor;    
  }
       public function getCor ()
  {
        return $this->cor;
  }

    public function setMarca ($marca)
    {
        $this->marca=$marca;    
  }
       public function getMarca ()
  {
        return $this->marca;
  }


  public function setAno($ano)
  {
    $this->ano=$ano;    
  }
  public function getAno()
  {
    return $this->ano;
  }

  public function setCambio($cambio)
  {
    $this->cambio=$cambio;    
  }
  public function getCambio()
  {
    return $this->cambio;
  }

	
	public function __construct($motor, $modelo, $cor, $marca, $ano, $cambio){
			$this->setMotor($motor);
			$this->setModelo($modelo);
			$this->setCor($cor);
			$this->setMarca($marca);
			$this->setAno($ano);
			$this->setCambio($cambio);
			
		}

		public function imprimir(){
			echo "<fieldset>";
			echo "<h1>Dados do Carro</h1>";
			echo "<br>Motor = " . $this->getMotor();
			echo "<br>Modelo = " . $this->getModelo();
			echo "<br>Cor = " . $this->getCor();
			echo "<br>Marca = " . $this->getMarca();
			echo "<br>Ano = " . $this->getAno();
			echo "<br>Cambio =  " . $this->getCambio();
			echo "</fieldset>";
		}
	}

?>