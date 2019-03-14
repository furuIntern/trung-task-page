<?php
    class database extends mysqli{
        function selectUser($usern,$passw){
            $prepare=$this->prepare("select * from users where usern = ? and passw = ? ");
            $prepare->bind_param('ss',$usern,$passw);
            if($prepare->execute()){
                return $prepare->get_result();
            } else {
                return false;
            }
        }
        function insertUser($usern,$passw){
            if (trim($usern) == '' || trim('passw') == '') return false;
            $prepare=$this->prepare("insert users(usern,passw) value (?,?) ");
            $prepare->bind_param('ss',$usern,$passw);
            return $prepare->execute();
        }
    }

    $user  = new database('localhost','root','','task_page');