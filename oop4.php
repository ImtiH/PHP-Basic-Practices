<?php



class password{


        const MINCHAR= 10;

        public function set_password($value){

            if ( strlen($value) < self::MINCHAR ){ // for constant, we have to use self::
                throw new Exception ( "Password required minimum " . self::MINCHAR . " charcters" );
            }

             else {
//            echo " successful";
//               echo $this -> password = md5($value); // we converted the passord to mdf/hash format.
                  return $this -> password = hash('sha256',$value); // we ca change the formar from here like md5 / sha256
        }


    }


}


$ins = new password();
echo $ins ->  set_password('1234f');
