<?php
    class campoTexto extends campoHTML{
        private $placeHolder;
        
        public function __construct(string $name, string $value, string $placeHolder){
            parent::__construct($name, $value);
            $this->placeHolder = $placeHolder;
        }

        function generaCodigoHTML(){
            return "<input name='$this->name' value='$this->value' placeholder='$this->placeHolder'>";
        }
    }
?>