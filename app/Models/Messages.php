<?php

namespace App\Models;

class Messages{
    public static function Mensagens(){
        if(isset($_SESSION['mensagem'])){
       
              echo "<script>";
                echo "Message('";
                 echo $_SESSION['mensagem']['msg']."',"."'".$_SESSION['mensagem']['type']."";
                echo "')";
              echo "</script>"; 
            
              unset($_SESSION['mensagem']); 
        }
    }
}
