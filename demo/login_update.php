<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php 
    if (isset($_POST['submit'])) {
        updateData();
    }
?>

<?php include "header.php"; ?>

<div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php showFetchId();  ?>
                        <!-- <option value="">1</option> -->
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Update">                
            </form>
        </div>
    </div>
<?php include "footer.php"; ?>