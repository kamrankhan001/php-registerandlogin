<?php include '../partial/header.php' ?>

<main>
    <div class="container py-3">
        <h1 class="text-center">Rgistration</h1>
    </div>
    <div class="container my-5">
        <form action="../script/createuser.php" method="POST" class="w-50 mx-auto" id="register">
            <div class="row">
                <div class="form-group col-12 my-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <label for="password">Passowrd</label>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <input type="submit" value="Register" class="btn btn-outline-primary">
                    <a href="login.php" class="btn btn-outline-info">Login</a>
                </div>
            </div>
        </form>
    </div>
</main>

<?php include '../partial/footer.php' ?>