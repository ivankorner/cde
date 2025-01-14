<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <img src="./img/logo.png" alt="logo" width="185">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted">Usuario</label>
                                <input type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" require class="form-control" required autofocus />
                                <div class="invalid-feedback">
                                    Usuario es requerido
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    <a href="./olvido_password.php" class="float-end">
                                        Olvidó su Password?
                                    </a>
                                </div>
                                <input type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" class="form-control" required />
                                <div class="invalid-feedback">
                                    Password es requerido
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Recordarme</label>
                                </div>
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Login
                                </button>
                            </div>
                            <?php
                            if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                                require_once "./php/main.php";
                                require_once "./php/iniciar_sesion.php";
                            }
                            ?>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="register.html" class="text-dark"></a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2025 &mdash; Concejo Deliberante Eldorado
                </div>
            </div>
        </div>
    </div>
</section>

