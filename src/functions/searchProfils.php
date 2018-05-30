<?php
    function searchOffers($_searchValue){
    global $offers;
    $results = array_filter($offers, function($_offerId) use($_searchValue,$offers){
        return (strpos($offers[$_offerId]["title"],$_searchValue)!== false)? true : false;
    },ARRAY_FILTER_USE_KEY);
    return $results;
}
 ?>
