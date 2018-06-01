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

        public function getConnection()
        {
            return $this->connection;
        }

        /*-----------------GET Datas ---------------*/
        public function getTableOffer()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer
            ");
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        public function getTableOfferFormation($_id){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE osi_offer.formation = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        public function getTableUniqSkill($_id)
        {
            $statement = $this->connection->prepare("
                SELECT osi_skill.id, `name` FROM `osi_skill`,`osi_offer_skill` WHERE osi_offer_skill.offer_id = :_id AND osi_offer_skill.skill_id = osi_skill.id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $UniqSkill = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $UniqSkill;
        }

        public function getTableSkill($_id)
        {
            $statement = $this->connection->prepare("
                SELECT id, name FROM osi_skill WHERE osi_skill.formation = :_id;
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $skills = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $skills;
        }

        public function getTableContract()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_contract
            ");
            $statement->execute();
            $contracts = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $contracts;
        }

        public function getTableFormation()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_formation
            ");
            $statement->execute();
            $offerSkills = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offerSkills;
        }

        public function getTableYear()
        {
            $statement = $this->connection->prepare("
                SELECT * FROM osi_niveau_etude
            ");
            $statement->execute();
            $years = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $years;
        }
        /*--------------GET Datas Offers by Filter-------------*/
        public function getBySearch($_value, $_idFormation){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE title LIKE :_value AND formation = :_idFormation
            ");
            $statement->bindValue(':_value', '%'.$_value.'%');
            $statement->bindValue(':_idFormation', $_idFormation);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        public function getByYear($_year, $_idFormation){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE year=:_year AND formation = :_idFormation
            ");
            $statement->bindValue(':_year', $_year);
            $statement->bindValue(':_idFormation', $_idFormation);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        public function getByContract($_contract, $_idFormation){
            $statement = $this->connection->prepare("
                SELECT * FROM osi_offer WHERE contract=:_contract AND formation = :_idFormation
            ");
            $statement->bindValue(':_contract', $_contract);
            $statement->bindValue(':_idFormation', $_idFormation);
            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }

        public function getBySkills($_skills, $_idFormation){
            $values = "(";
            $index= 0;

            foreach ($_skills as $skill) {
                $values.=":skill_".$skill;
                if($index < sizeof($_skills)-1)$values.=",";
                $index+=1;
            }
            $values.= ")";

            $statement = $this->connection->prepare("SELECT id,title,year,formation,contract,description,period
                FROM osi_offer,osi_offer_skill
                WHERE formation = :_idFormation
                AND id = osi_offer_skill.offer_id
                AND osi_offer_skill.skill_id IN ".$values.";
            ");

            $statement->bindValue(':_idFormation', $_idFormation);
            foreach ($_skills as $skill) {
                $statement->bindValue(':skill_'.$skill, $skill);
            }

            $statement->execute();
            $offer = $statement->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
            return $offer;
        }


        /*--------------ADD Datas-------------*/
        public function addOffer($_posts){
            $statement = $this->connection->prepare("INSERT INTO osi_offer (title,year,formation,contract,description,period)
                VALUES (:title,:year,:formation,:contract,:description,:period);
            ");
            foreach ($_posts as $key => $post) {
                if($key != "skills")$statement->bindValue(':'.$key,$post);
            }
            $statement->execute();
            $this->addOfferSkills($this->connection->lastInsertId(),$_posts["skills"]);
        }

        private function addOfferSkills($_id, $_skills){
            $values = "";
            $index= 0;
            foreach ($_skills as $skill) {
                $values.="(:offer_id,:skill_".$skill.")";
                if($index < sizeof($_skills)-1)$values.=",";
                $index+=1;
            }

            $statement = $this->connection->prepare("INSERT INTO osi_offer_skill (offer_id,skill_id)
                VALUES ".$values.";
            ");
            foreach ($_skills as $skill) {
                $statement->bindValue(':offer_id',$_id);
                $statement->bindValue(':skill_'.$skill,$skill);
            }
            $statement->execute();
        }

        public function updateOffer($_posts){
            $statement = $this->connection->prepare("UPDATE osi_offer
                SET id=:id,title=:title,year=:year,formation=:formation,contract=:contract,description=:description,period=:period
                WHERE id = :id
            ");
            foreach ($_posts as $key => $post) {
                if($key != "skills")$statement->bindValue(':'.$key,$post);
            }
            $statement->execute();
            $this->deleteSkills($_posts["id"]);
            $this->addOfferSkills($_posts["id"],$_posts["skills"]);
        }

        /*--------------DELETE Datas-------------*/
        private function deleteSkills($_id){
            $statement = $this->connection->prepare("DELETE FROM osi_offer_skill
                WHERE offer_id = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
        }

        public function deleteOffer($_id){
            $statement = $this->connection->prepare("DELETE FROM osi_offer
                WHERE id = :_id
            ");
            $statement->bindValue(':_id', $_id);
            $statement->execute();
            $this->deleteSkills($_id);
        }
    }
 ?>
