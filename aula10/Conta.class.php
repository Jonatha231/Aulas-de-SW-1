<?php  
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor> $this->Saldo){
                return "Saldo insuficiente";
            }




            $this->Saldo= $this->Saldo - $valor;
            $resultado = "Seu saldo atual é de R$" .$this->Saldo;
            return $resultado;


        }
        public function Depositar($valor){
            $this->Saldo= $this->Saldo + $valor;
            $resultado = "Seu saldo atual é de R$" .$this->Saldo;
            return $resultado;

        }
        
        public function consultarsaldo(){
            echo "nome : " . $this->Nome . "<BR>" ;
            echo "Cpf :  " . $this->Cpf . "<BR>" ;
            echo "Saldo : " . $this->Saldo . "<BR>" ;
        }
    }
?>