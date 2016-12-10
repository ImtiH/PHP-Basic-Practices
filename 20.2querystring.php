<?php



if ( isset($_GET['page']) && $_GET['page'] == "about" ){
    echo " This is about page ";
}
else if ( isset($_GET['page']) && $_GET['page'] == "service"){
    echo " This is Service page ";
}

else {
    echo " This is homepage";
}


//http://localhost/php/20.2querystring.php?page=service
// sudu if(isset ($_GET['page']== 'service' ))  hole kaj korchena.
