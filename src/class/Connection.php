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
            $offer = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $offer;
        }

        function getTableOfferFormation($_id){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE osi_offer.formation = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $offer;
        }

        function getTableUniqSkill($_id)
        {
            $statement = $this->connection->prepare("
                SELECT `name` FROM `osi_skill`,`osi_offer_skill` WHERE osi_offer_skill.offer_id = :_id AND osi_offer_skill.skill_id = osi_skill.id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $UniqSkill = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $UniqSkill;
        }

        function getTableSkill($_id)
        {
            $statement = $this->connection->prepare("
                SELECT id, name FROM osi_skill WHERE osi_skill.formation = :_id;
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $skills = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $skills;
        }

        function getTableContract()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_contract
            ");
            $statement->execute();
            $contracts = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $contracts;
        }

        function getTableFormation()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_formation
            ");
            $statement->execute();
            $offerSkills = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offerSkills;
        }

        function getTableYear()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_niveau_etude
            ");
            $statement->execute();
            $years = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $years;
        }

        function addOffer($_posts){
            $statement = $this->connection->prepare("INSERT INTO osi_offer (title,year,formation,contract,description,period)
                VALUES (:title,:year,:formation,:contract,:description,:period);
            ");
            foreach ($_posts as $key => $post) {
                if($key != "skills")$statement->bindValue(':'.$key,$post);
            }
            $statement->execute();
            $this->addOfferSkill($this->connection->lastInsertId(),$_posts["skills"]);
        }

        function addOfferSkill($_id, $_skills){
            $statement = $this->connection->prepare("INSERT INTO osi_offer_skill (offer_id,skill_id)
                VALUES (:offer_id,:skill_id);
            ");
            foreach ($_skills as $skill) {
                $statement->bindValue(':offer_id',$_id);
                $statement->bindValue(':skill_id',$skill);
            }
            $statement->execute();
        }
    }
 ?>
