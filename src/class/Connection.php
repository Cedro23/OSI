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
            $profil = $statement->fetchAll();
            return $profil;
        }
    }
 ?>
