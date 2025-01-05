<?php

// oop class constants.......................................

class man1 {
    const message = "Thanks for throwing message <br>";
}
echo man1::message;


class man2 {
    const message = "Thanks for throwing message <br>";
    public function mass () {
        echo self::message;
    }
}
$human = new man2();
$human->mass();





// oop class static................................

class man3 {
    public static function details () {
        echo "This is the man number 3 <br>";
    }
}
man3::details();



class man4 {
    public static function details () {
        echo "This is the man number 4 <br>";
    }
    public function __construct() {
        self::details();
    }
}
new man_sub_4();




class man5 {
    public static function details () {
        echo "This is the man number 5 <br>";
    }
}

class man_sub_5 {
    public function messsage () {
        man5::details();
    }
}

$man_5_sub = new man_sub_5();
$man_5_sub-> messsage();





class domain {
    protected static function get_web() {
        return "coderloft.com";
    }
}

class my_domain extends domain {
    public $web_name;
    public function __construct () {
        $this->web_name = parent::get_web();
    }
}
$coder_loft = new my_domain();
echo $coder_loft-> web_name;

?>