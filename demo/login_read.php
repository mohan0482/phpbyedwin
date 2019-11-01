<?php 
include "db.php";   
include "functions.php";
?>

<?php include "header.php"; ?>

    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Read</h1>            
            <pre class="bg-light">
                <?php readData(); ?>
            </pre>
            
        </div>        
    </div>
<?php include "footer.php"; ?>