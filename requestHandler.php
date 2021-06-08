<?php
   if($_POST){
        $message = [
            "info" => "mesage sent successfully"
        ];
        $messages = json_encode($message);
        echo $messages;
       // }
    }
?>