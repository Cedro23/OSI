<?php
class FormFilter extends Form{
    public function getPostData(){
        $postsCheck = [];
        $postsCheck[] = $this->checkPost("search");
            global $searchFilter;
            $searchFilter = $this->posts["search"];
        $postsCheck[] =$this->checkPost("contract");
            global $contractFilter;
            $contractFilter = $this->posts["contract"];
        $postsCheck[] =$this->checkPost("year");
            global $yearFilter;
            $yearFilter = $this->posts["year"];
        $postsCheck[] =$this->getSkills();
            global $skillsFilter;
            $skillsFilter = $this->posts["skills"];

        foreach ($postsCheck as $value) {
            //at least one filter value
            if ($value == true) return true;
        }
        //filter empty
        return false;
    }

    public function callFormFunction(){
        $offersFilter = null;
        foreach ($this->posts as $key => $value) {

            if($value !=""){
                $newOffers = $this->switchFilterValues($key);
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
