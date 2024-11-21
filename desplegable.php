<?php
    class desplegable extends campoHTML{
        private $valores;
        
        public function __construct(string $name, array $valores){
            parent::__construct($name, "");
            $this->valores = $valores;
        }

        function generaCodigoHTML(){
            $rt = "<select name='$this->name'>";
            for ($i=0; $i < sizeof($this->valores); $i++) { 
                $value = $this->valores[$i];
                $valueMin = strtolower($value);
                $rt = $rt . "<option value='$valueMin'>$value</option>";
            }
            $rt = $rt . "</select>";
            return $rt;
        }
    }
?>