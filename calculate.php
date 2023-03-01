<?php 


    class Calculate{
        private $total;

        public function addNumber($n1,$n2){
            $this->total = $n1 + $n2;
            return $this->total;
        }
    }


?>