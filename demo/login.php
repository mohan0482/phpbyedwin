<?php include "header.php"; ?>


    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="login_cred.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Create">                
            </form>
        </div>
    </div>
    <?php include "footer.php"; ?>