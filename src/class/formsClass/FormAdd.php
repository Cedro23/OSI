<?php
class FormAdd extends Form
{
    public function getPostData(){
        $postsCheck = [];
        if(!$this->checkPost("title")){
            global $titleErr;
            $titleErr = "Entrez le titre du profil";
            $postsCheck[] = "false";
        } else {
            global $title;
            $title = $this->posts["title"];
            $postsCheck[] = "true";
        }
        if(!$this->checkPost("contract")){
            global $contractErr;
            $contractErr = "Entrez un contrat";
            $postsCheck[] = "false";
        } else {
            global $contract;
            $contract = $this->posts["contract"];
            $postsCheck[] = "true";
        }
        if(!$this->checkPost("year")){
            global $yearErr;
            $yearErr = "Entrez une année";
            $postsCheck[] = "false";
        } else {
            global $year;
            $year = $this->posts["year"];
            $postsCheck[] = "true";
        }
        if(!$this->checkPost("formation")) return false;
        if(!$this->checkPost("description")){
            global $descriptionErr;
            $descriptionErr = "Entrez une description";
            $postsCheck[] = "false";
        } else {
            global $description;
            $description = $this->posts["description"];
            $postsCheck[] = "true";
        }
        if(!$this->checkPost("period")){
            global $periodErr;
            $periodErr = "Entrez une periode";
            $postsCheck[] = "false";
        } else {
            global $period;
            $period = $this->posts["period"];
            $postsCheck[] = "true";
        }
        if(!$this->getSkills()){
            global $skillsErr;
            $skillsErr = "Entrez un contrat";
            $postsCheck[] = "false";
        } else {
            global $skillsCheck;
            $skillsCheck = $this->posts["skills"];
            $postsCheck[] = "true";
        }

        foreach ($postsCheck as $value) {
            if ($value == "false") return false;
        }
        return true;
    }
    public function callFormFunction(){
        getConnection()->addOffer($this->posts);

    }

    protected function init(){
        initOffers();
        initProfils();
    }
}

 ?>
