<?php
    class Connection
    {
        private $dsn;
        private $user;
        private $pwd;
        private $connection;

        function __construct(string $_dsn, string $_user, string $_pwd)
        {
            $this->connection = new PDO($_dsn, $_user, $_pwd);
        }

        function getConnection()
        {
            return $this->connection;
        }

        function getTableOffer()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer
            ");
            $statement->execute();
            $offer = $statement->fetchAll();
            return $offer;
        }

        function getTableSkill()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_skill
            ");
            $statement->execute();
            $skill = $statement->fetchAll();
            return $skill;
        }

        function getTableContract()
        {
            $statement = $this->connection->prepare("
                SELECT type FROM osi_contract
            ");
            $statement->execute();
            $contract = $statement->fetchAll();
            return $contract;
        }

        function getTableFormation()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_formation
            ");
            $statement->execute();
            $formation = $statement->fetchAll();
            return $formation;
        }
    }
 ?>
