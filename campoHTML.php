<?php
    abstract class campoHTML {
        protected $name;
        protected $value;

        function __construct(string $name, string $value){
            $this->name = $name;
            $this->value = $value;
        }

        abstract function generaCodigoHTML();
    }
?>