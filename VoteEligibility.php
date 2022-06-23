<?php
include "VoteEligibilityException.php";
class VoteEligibility {
    static function checkAge($age) {
        try{
            if ($age >= 18){
                echo "Eligible to vote";
            }
            else{
                throw new VoteEligibilityException(" not eligible to  vote\n");
            }
        } catch(VoteEligibilityException $e) {
            echo  $e->getMessage."\n"();
        }

    }
}
VoteEligibility::checkAge(18);
?>