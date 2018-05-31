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
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        function getTableOfferFormation($_id){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE osi_offer.formation = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
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
            $this->addOfferSkills($this->connection->lastInsertId(),$_posts["skills"]);
        }

        function addOfferSkills($_id, $_skills){
            $statement = $this->connection->prepare("INSERT INTO osi_offer_skill (offer_id,skill_id)
                VALUES (:offer_id,:skill_id);
            ");
            foreach ($_skills as $skill) {
                $statement->bindValue(':offer_id',$_id);
                $statement->bindValue(':skill_id',$skill);
            }
            $statement->execute();
        }

        function updateOffer($_posts){
            $statement = $this->connection->prepare("UPDATE osi_offer
                SET id=':id',title=':title',year=':year',formation=':formation',contract=':contract',description=':description',period=':period'
                WHERE id = :id
            ");
            foreach ($_posts as $key => $post) {
                if($key != "skills")$statement->bindValue(':'.$key,$post);
                var_dump($key);
            }
            $statement->execute();
            $this->deleteSkills($_posts["id"]);
            $this->addOfferSkills($_posts["id"],$_posts["skills"]);
        }

        function deleteSkills($_id){
            $statement = $this->connection->prepare("DELETE FROM osi_offer_skill
                WHERE offer_id = :_id ;
            ");
            $statement->bindValue(':_id', $_id);
        }

        function deleteOffer($_id){
            $statement = $this->connection->prepare("DELETE FROM osi_offer
                WHERE id = :_id ;
            ");
            $statement->bindValue(':_id', $_id);
            $this->deleteSkills($_posts["id"]);
        }
    }
 ?>
