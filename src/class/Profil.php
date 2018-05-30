<?php
    /**
     *
     */
    class Profil
    {
        private $id;
        private $title;
        private $contract;
        private $year;
        private $formation;
        private $description;
        private $period;
        private $skills;

        function __construct($_id, $_title, $_contract, $_year, $_formation, $_description, $_period, $_skills)
        {
            $this->id = $_id;
            $this->title = $_title;
            $this->contract = $_contract;
            $this->year = $_year;
            $this->formation = $_formation;
            $this->period = $_period;
            $this->description = $_description;
            $this->skills = $_skills;
        }

        function dump()
        {
            var_dump($this->id);
            var_dump($this->title);
            var_dump($this->contract);
            var_dump($this->year);
            var_dump($this->formation);
            var_dump($this->description);
            var_dump($this->period);
            var_dump($this->skills);
        }

        function getId()
        {
            return $this->id;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getContract()
        {
            return $this->contract;
        }

        function getSkills()
        {
            return $this->skills;
        }

        function getYear()
        {
            return $this->year;
        }
    }

 ?>
