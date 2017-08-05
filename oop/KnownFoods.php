<?php
    class KnownFoods extends loadDibi{
        protected $foods = [];
        protected $food_values = [];

        public function __constructor(){
            $this->loadRecepture();
            $this->loadValues();
        }

        protected function loadRecepture(){
            // rendering all of enabled rows
            $foodList = $this->db->fetchAll("SELECT * FROM Food_recepture WHERE 1");
            if($foodList !== null){
                foreach($foodList as $food){
                    // re-indexing column "ingredients"
                    $food["ingredients"] = explode(",",$food["ingredients"]);
                    // filtering returning of dibi by each of information from database
                    $this->foods[$food["id"]] = [
                        "name" => $food["name"],
                        "ingredients" => $food["ingredients"]
                    ];
                }
            return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function loadValues(){
            $valueList = $this->db->fetchAll("SELECT * FROM Food_values WHERE 1");
            if($valueList !== null){
                foreach($valueList as $value){
                    $this->food_values[$value["id"]] = [
                        "food_name" => $value["name"],
                        "proteins" => $value["proteins"],
                        "fats" => $value["fats"],
                        "carbohydrates" => $value["carbohydrates"],
                        "minerals" => $value["minerals"]  
                    ];
                }
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

    }