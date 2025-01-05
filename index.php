<?php

class man1 {
    const message = "Thanks for throwing message <br>";
}
echo man1::message;



class man2 {
    const message = "Thanks for throwing message";
    public function mass () {
        echo self::message;
    }
}
$human = new man2();
$human->mass();




?>