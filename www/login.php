
<?php require_once 'Layout/link.php'; ?>

<div class="mobile-screen-width">
    <div class="stick-header mb-20">
        <a href="start-page.html"><img src="img/icon/back-arrow.svg" class="img-fluid" alt="img"></a>
    </div>
    <div class="login-min-height pad-40 pt-0">
        <div class="row w-100 m-0">
            <div class="col-12">
                <div class="text-center mb-30">
                    <img src="img/login-logo.svg" class="img-fluid" alt="img">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="" value="Elloumi" placeholder="Name">
                    <span class="input-icon"><img src="img/icon/user.svg" class="img-fluid" alt="img"></span>
                </div>
                <div class="form-group input-right-div mb-2">
                    <label>Passwort</label>
                    <input type="password" class="form-control" name="" value="password" placeholder="Password">
                    <span class="input-icon"><img src="img/icon/password.svg" class="img-fluid" alt="img"></span>
                    <span class="input-icon-right"><img src="img/icon/eye.svg" class="img-fluid" alt="img"></span>
                </div>
                <p class="text-end ft-12">Passwort vergessen ?</p>
                <div class="text-center">
                    <a href="dashboard.html"><button class="btn theme-btn quicksand-btn min-w-250 mt-4 mb-3">Los</button></a>
                    <p class="ft-12">Sie haben kein Konto ? &nbsp; <a href="register.html" class="text-danger">Registrieren</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img src="img/login-img.svg" class="img-fluid login-img" alt="img">
    </div>
</div>

<?php require_once 'Layout/script.php'; ?>

</body>
</html>