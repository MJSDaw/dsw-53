<?php
    class campoOculto extends campoHTML{        
        public function __construct(string $name, string $value){
            parent::__construct($name, $value);
        }

        function generaCodigoHTML(){
            return "<input name='$this->name' value='$this->value' hidden>";
        }
    }
?>