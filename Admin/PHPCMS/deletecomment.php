<?php require_once('Include/DB.php'); ?>
<?php require_once('Include/sessions.php'); ?>
<?php require_once('Include/functions.php'); ?>

<?php

    if(isset($_GET['id'])){
        
        $commentid = $_GET['id'];
        $connection = mysqli_connect('localhost', 'root', '', 'phpcms');
    
        $query = "DELETE FROM comments WHERE id='$commentid'";
            $execute = mysqli_query($connection, $query);
            if($execute) {
                $_SESSION['success_message'] = "Comment Deleted successfully.";
                redirect_to('comments.php');
            } else {
                $_SESSION['error_message'] = "Something went wrong";
                redirect_to('comments.php');
            }

}
?>