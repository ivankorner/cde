<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="./img/logo.png"
                                        style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1"></h4>
                                    <br>
                                </div>

                                <form action="" method="POST" autocomplete="off">
                                    <p>Ingrese sus credenciales de acceso</p>

                                    <div data-mdb-input-init class="form-outline mb-4 input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill-check"></i></span>

                                        <input type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" require class="form-control"
                                            placeholder="Usuario" />



                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4 input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></i></span>
                                        <input type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" class="form-control" placeholder="Password" />

                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">

                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>

                                        <a class="text-muted" href="#!">Olvidó su Password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">No tiene cuenta?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Crear</button>
                                    </div>

                                    <?php
                                    if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                                        require_once "./php/main.php";
                                        require_once "./php/iniciar_sesion.php";
                                    }
                                    ?>

                                </form>

                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>