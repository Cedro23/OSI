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

        function getTableUniqSkill($_id)
        {
            $statement = $this->connection->prepare("
                SELECT `title` FROM `osi_skill`,`osi_offer_skill` WHERE osi_offer_skill.offer_id = :_id AND osi_offer_skill.skill_id = osi_skill.id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $UniqSkill = $statement->fetchAll();
            return $UniqSkill;
        }

        function getTableSkill()
        {
            $statement = $this->connection->prepare("
                SELECT title FROM osi_skill
            ");
            $statement->execute();
            $skill = $statement->fetchAll();
            return $skill;
        }

        function getTableContract($_id)
        {
            $statement = $this->connection->prepare("
                SELECT type FROM osi_contract WHERE id = :_id
            ");
            $statement->bindValue(':_id', $_id);
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
            $offerSkill = $statement->fetchAll();
            return $offerSkill;
        }

        function getTableOfferSkill($_id){
            $statement = $this->connection->prepare("
                SELECT skill_id FROM osi_offer_skill WHERE offer_id = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $offerSkill = $statement->fetchAll();
            return $offerSkill;
        }
    }
 ?>
