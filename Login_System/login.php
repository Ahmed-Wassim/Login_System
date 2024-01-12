<?php include('header.php'); ?>

<form action="includes/login.inc.php" method="POST">
<div class="container w-50">
        <div class="form-group">
                <label for="uid">Username</label>
                <input type="text" name="uid" class="form-control">
        </div>
        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
        </div>
                <button class="btn btn-primary" type="submit">Send</button>
</div>
</form>

<?php include('footer.php'); ?>