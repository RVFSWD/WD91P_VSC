<?php

class ErrorMessage {
    const ERROR_MESSAGE = "Error detected!";

    public function print(){
        echo self::ERROR_MESSAGE;
    }
}


echo ErrorMessage::ERROR_MESSAGE;

?>



