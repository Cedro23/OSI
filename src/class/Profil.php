<?php
    /**
     *
     */
    class Profil
    {
        private $id;
        private $title;
        private $contract;
        private $class;
        private $formation;
        private $description;
        private $period;
        private $skills;

        function __construct($_id, $_title, $_contract, $_class, $_formation, $_description, $_period, $_skills)
        {
            $this->id = $_id;
            $this->title = $_title;
            $this->contract = $_contract;
            $this->class = $_class;
            $this->formation = $_formation;
            $this->period = $_period;
            $this->description = $_description;
            $this->skills = $_skills;
        }
    }

 ?>
