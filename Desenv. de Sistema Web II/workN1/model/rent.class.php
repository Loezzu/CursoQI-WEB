<?php

    class Rent
    {
        private $clientName;
        private $cpf;
        private $age;
        private $vehicleModel;
        private $vehicleType;

        public function __construct()
        {
            
        }

        public function __get($attribute)
        {
            return $this->$attribute;
        }

        public function __set($attribute, $value)
        {
            $this->$attribute = $value;
        }

        public function calculateRent($fuelType, $days, $rentValue)
        {
            switch ($fuelType) {
                case "GNV":
                    $fuelPrice = 50;
                    break;
                
                case "Gasoline":
                    $fuelPrice = 100;
                    break;
            }

            return ($fuelPrice + $rentValue) * $days;
        }

    }


?>