<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/extras.css') }}" rel="stylesheet" />
    </head>
    <body class="bg-img">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: rgba(42, 85, 85, 0.85);">
                                    <div class="card-header"><h3 class="text-center font-weight-dark text-light my-4">Iniciar Sesion</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{ url('/login/post') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="correo" placeholder="name@example.com" />
                                                <label for="inputEmail">Correo Electronico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="pass" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <!-- <a class="btn btn-dark" href="index.html">Ingresar</a> -->
                                                <button class="btn btn-dark" type="submit" name="action" value="Enviar">Ingresar</button>
                                            </div>
                                            <div align="center"><?php if(isset($mensaje)){ echo $mensaje; } ?></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Finanzas UDB 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
