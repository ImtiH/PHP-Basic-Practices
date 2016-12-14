


    <?php

    $title = "This is title";
    include('header.php');

    ?>

    <div class="content">
        <h3> THis is some content </h3>
    </div>

<!--     <?php include('footer.php'); ?>-->
     <?php require('footer.php'); ?>

<!--     The difference between include();  and require(); is
        -> If thee is something missing / bug while including the file, it generates an error Notice for that particlar error/mistake. But all the rest parts will work fine.
        -> Whereas, with require(); also does the same as include(); but if there is any big while requiring the file; it will generate a error notice and won't execute any code from and below that point.

-->
