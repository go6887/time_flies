<?php

$db_host = 'localhost';
$db_name = 'textbox';
$db_user = 'root';
$db_pass = 'sch1ph0ldb';

// connect database
$link = mysqli_connect( $db_host, $db_user, $db_pass, $db_name );
if ( $link !== false ) {

    $msg     = '';
    $err_msg = '';

    if ( isset( $_POST['send'] ) === true ) {

        $name     = $_POST['name']   ;
        $comment = $_POST['comment'];


    }

    $query  = "SELECT id, name, comment FROM board";
    $res    = mysqli_query( $link,$query );
    $data = array();
    while( $row = mysqli_fetch_assoc( $res ) ) {
        array_push( $data, $row);
    }
    arsort( $data );

} else {
    echo "failed to connenct database";
}

// close database
mysqli_close( $link );
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>

        <!-- show the text -->
        <?php
            if ( $msg     !== '' ) echo '<p>' . $msg . '</p>';
            if ( $err_msg !== '' ) echo '<p style="color:#f00;">' . $err_msg . '</p>';
            foreach( $data as $key => $val ){
                echo $val['name'] . ' ' . $val['comment'] . '<br>';
            }
        ?>
    </body>
</html>
