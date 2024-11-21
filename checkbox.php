<?php
    class checkbox extends campoHTML{
        private $texto;
        
        public function __construct(string $name, string $texto, string $value){
            parent::__construct($name, $value);
            $this->texto = $texto;
        }

        function generaCodigoHTML(){
            return "$this->texto: <input type='checkbox' name='$this->name' value='$this->value'>";
        }
    }
?>