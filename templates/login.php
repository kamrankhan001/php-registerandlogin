<?php include '../partial/header.php' ?>

<main>
    <div class="container py-3">
        <h1 class="text-center">Login</h1>
    </div>
    <div class="container my-5">
        <form action="../script/login.php" method="POST" class="w-50 mx-auto" id="login">
            <div class="row">
                <div class="form-group col-12 my-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <label for="password">Passowrd</label>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required class="form-control">
                </div>
                <div class="form-group col-12 my-2">
                    <input type="submit" value="Login" class="btn btn-outline-primary">
                    <a href="index.php" class="btn btn-outline-info">Register</a>
                </div>
            </div>
        </form>
    </div>
</main>

<?php include '../partial/footer.php' ?>