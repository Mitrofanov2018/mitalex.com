<?php
    class Accessor {
        private $one = [];
        public function show(){
            echo '<pre>';
            print_r($this->one);
            echo '</pre>';
        }
        public function __get($name)
        {
            if (array_key_exists($name, $this->one)) {
                return $this->one[$name];
            }
            else {
                return null;
            }
        }
        public function __set($name, $value)
        {
            $this->one[$name] = $value;
        }
    }
    $obj = new Accessor();
    $obj->text = "Hello";
    echo $obj->text;
    $obj->show();
    echo $obj->text;
?>
