<?php
function isTWId($id) : bool { ...

}
function createTWId($isMale = true) : string{
    $letters = 'ABCDEFGHIJKLNMOPQRSTU'

    $ret = false;
    if (preg_match("/^[A-Z][12][0-9]{8}$/", $id)){
        $ret = true;
         
    }
   return $ret;
}

?>







    