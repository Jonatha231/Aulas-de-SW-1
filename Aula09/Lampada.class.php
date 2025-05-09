<?php 
class lampada{
    public $fabricantes;
    public $tensao;
    public $potencia;
    public $cor;
    public $status;


    public function Ligar(){
        $this->status = True;
    }

    public function Desligar(){
        $this->status = False;
    }

    public function Mostrardados(){

        echo "O fabricante è :" . $this->fabricantes . "<br>" ;
        echo "O Tensao è :" . $this->tensao . "<br>" ;
        echo "Potencia è :" . $this->potencia . "<br>" ;
        echo "O Cor è :" . $this->cor . "<br>" ;
        if($this->status==1;){
            echo "O status é ligada <br>";

        }else{
            
        }
            echo" o statuas é desligado <br>';
        
        
        
        echo "O Status è :" . $this->status . "<br>" ;
        
    }

}

?>