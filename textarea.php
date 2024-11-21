<?php
    require_once "conEstilo.php";
    class textarea extends campoHTML implements conEstilo{
        private $placeHolder;
        private $css;
        
        public function __construct(string $name, string $value, string $placeHolder){
            parent::__construct($name, $value);
            $this->placeHolder = $placeHolder;
        }

        function tipoLetra($css){
            $this->css = $css;
        }

        function generaCodigoHTML(){
            return "<textarea name='$this->name' value='$this->value'   placeholder='$this->placeHolder' style='resize: none;$this->css' cols='30' rows='10'></textarea>";
        }
    }
?>