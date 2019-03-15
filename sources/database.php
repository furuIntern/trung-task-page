<?php
    class database extends mysqli{
        public $usern;
        public $id;
        function setUser($usern){
            $this->usern = $usern;
            $user = $this->query("select id from users where usern = '$usern'");
            $user = $user->fetch_assoc();
            $this->id = $user["id"];
        }
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
            $prepare=$this->prepare("insert into users(usern,passw) value (?,?) ");
            $prepare->bind_param('ss',$usern,$passw);
            return $prepare->execute();
        }
        function insertList($listn){
            $prepare=$this->prepare("insert into lists(listn,userid) value (?,?) ");
            $prepare->bind_param('si',$listn,$this->id);
            return $prepare->execute();
        }
    }

    $user  = new database('localhost','root','','task_page');