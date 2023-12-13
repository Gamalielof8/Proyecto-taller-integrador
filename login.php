<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fast Delivery Proyecto Académico</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100" style="background-color:#ff8000">
    <div
      class="bg-white p-5 rounded-4 text-secondary shadow"
      style="width: 30rem"
    >
      <div class="d-flex justify-content-center">
        <img src="public/assets/Rappi_logo.png" alt="user-icon" style="height: 5rem"/>
        <img src="public/assets/username-icon.svg" alt="username-icon" style="height: 1rem"/>
      </div>
      <div class="text-center mt-2 fw-bold"> <h2>Inicio de Sesión </h2></div>

      <form action="<?=base_url("/login/Procesar")?>" method="POST">
      <div class="text-white mt-4 fw-semibold shadow-sm">
      <div class="input-group mt-4">
        <div class="input-group-text bg-dark">
          <img src="public/assets/username-icon.svg" alt="username-icon" style="height: 1rem"
          />
        </div>
        <input class="form-control bg-light" type="text" placeholder="Usuario" name="Usuario"/>
        <div class="input-group mt-1">
        <div class="input-group-text bg-dark mb-3">
          <img src="public/assets/password-icon.svg" alt="password-icon" style="height: 1rem"
          />
        </div>
        <input class="form-control bg-light mb-3" type="password" placeholder="Contraseña" name="Contraseña"/>
      </div>
      </div>
        <button class="btn btn-dark w-100"> Iniciar sesion</button>
      </div>
      </form>

      <div class="d-flex gap-1 justify-content-center mt-1">
        <div>¿No tienes una cuenta?</div>
        <a href="#" class="text-decoration-none text-info fw-semibold"
          >Registrate</a
        >
      </div>
      <div class="p-3">
        <div class="border-bottom text-center" style="height: 0.9rem">
          <span class="bg-white px-3">o</span>
        </div>
      </div>
      <div
        class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm"
      >
        
        <img src="public/assets/google-icon.svg" alt="google-icon" style="height: 1.6rem"/>
        <div class="fw-semibold text-secondary">Continua con Google</div>
      </div>
    </div>
  </body>
</html>