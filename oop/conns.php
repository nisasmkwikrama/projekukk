<?php
class web {
 public static $title = "My Page";

    public function changeTitle() {
        self::$title ='My page2';
        return  self::$title;
    }
    public function changeTitle2() {
       return  self::$title;
    }
}
 class YourWeb extends Web {
    public function changeTitle() {
        self:: $title= 'Your Page';
        return self :: $title;
    }
    }
  echo Web::$title . "<br>";
  $myweb = new Web;
  echo $myweb->changeTitle() . "<br>" .
  $myweb->changeTitle2();
  echo "<br>";
  $yourweb = new YourWeb ;
  echo $yourweb->changeTitle() . "<br>" .
  $myweb->changeTitle2();

    ?>
