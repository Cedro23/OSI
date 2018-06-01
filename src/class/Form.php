<?php
class Form
{
    protected $posts = [];

    function __construct()
    {

    }

    protected function checkPost(string $_str){
        if(isset($_POST[$_str]) == false){
            return false;
        }
        else if ($_POST[$_str] == "" ){
            $this->posts[$_str] = "";
            return false;
        }else{
            $this->posts[$_str] = $_POST[$_str];
            return true;
        }
    }

    protected function getSkills(){
        if(isset($_POST["skills"]) == false){
            return false;
        }
        else if ($_POST["skills"] == "" ){
            $this->posts["skills"] = "";
            return false;
        }else{
            $this->posts["skills"] = [];
            foreach ($_POST["skills"] as $skill) {
                $this->posts["skills"][]=$skill;
            }
            return true;
        }
    }

    public function callFormFunction(){

    }

    public function getPostData(){

    }
}


class FormAdd extends Form
{
    public function getPostData(){
        if(!$this->checkPost("title")) return false;
        if(!$this->checkPost("contract")) return false;
        if(!$this->checkPost("year")) return false;
        if(!$this->checkPost("formation")) return false;
        if(!$this->checkPost("description")) return false;
        if(!$this->checkPost("period")) return false;
        if(!$this->getSkills()) return false;

        return true;
    }
    public function callFormFunction(){
        getConnection()->addOffer($this->posts);
        initOffers();
        initProfils();
    }
}

class FormUpdate extends FormAdd
{
    public function getPostData(){
        if(!$this->checkPost("id"))return false;
        parent::getPostData();
        return true;
    }

    public function callFormFunction(){
        getConnection()->updateOffer($this->posts);
        initOffers();
        initProfils();
    }
}

class FormMail extends Form
{
    public function getPostData(){
        if(!$this->checkPost("mail")) return false;
        if(!$this->checkPost("num")) return false;
        if(!$this->checkPost("firstName")) return false;
        if(!$this->checkPost("lastName")) return false;
        $this->checkPost("comments");
        return true;
    }

    public function callFormFunction(){
        global $idProfil;
        sendMail(getProfils()[$idProfil]->getTitle(), $this->posts['num'], $this->posts['mail'], $this->posts['firstName'], $this->posts['lastName'], $this->posts['comment']);
    }
}

class FormFilter extends Form{
    public function getPostData(){
        $this->checkPost("search");
        $this->checkPost("contract");
        $this->checkPost("year");
        $this->getSkills();
        return true;
    }

    public function callFormFunction(){
        $offersFilter = null;
        foreach ($this->posts as $key => $value) {

            if($value !=""){
                $newOffers = $this->switchFilterValues($key);
                var_dump($newOffers);
                if($offersFilter != null){
                    $offersFilter = array_filter($offersFilter, function($_offerId) use($newOffers){
                        return (array_key_exists($_offerId,$newOffers)!== false)? true : false;
                    },ARRAY_FILTER_USE_KEY);
                }else{
                    $offersFilter = $newOffers;

                }
            }
        }

        global $offers;
        $offers = $offersFilter;
        initProfils();
    }

    private function switchFilterValues($_key){
        global $idFormation;

        switch ($_key) {
            case 'search':
                return getConnection()->getBySearch($this->posts[$_key],$idFormation);
            case 'contract':
                return getConnection()->getByContract($this->posts[$_key],$idFormation);
            case 'year':
                return getConnection()->getByYear($this->posts[$_key],$idFormation);
            case 'skills':
                return getConnection()->getBySkills($this->posts[$_key],$idFormation);
                break;
            default:
                // code...
                break;
        }
    }
}


?>
