<?php
    /**
     *
     */
    class Profil
    {

        function __construct(argument)
        {
            
        }

        public function getTableOffer()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer
            ");
            $statement->execute();
            $offer = $statement->fetchAll();
            return $offer;
        }
    }

 ?>
