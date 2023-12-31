<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="public/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
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
      </div>
      <div class="text-center mt-2 fw-bold"> <h2>Inicio de Sesión </h2></div>

      <form action="autenticarlogin.php" method="post">
        <div class="text-white mt-4 fw-semibold shadow-sm">
        <div class="input-group mt-4">
          <div class="input-group-text bg-dark">
            <img src="public/assets/username-icon.svg" alt="username-icon" style="height: 1rem"
            />
          </div>
          <input required id ="Usuario" class="form-control bg-light" type="text" placeholder="Usuario" name="Usuario"/>
          <div class="input-group mt-1">
          <div class="input-group-text bg-dark mb-3">
            <img src="public/assets/password-icon.svg" alt="password-icon" style="height: 1rem"
            />
          </div>
          <input required id ="Contraseña" class="form-control bg-light mb-3" type="password" placeholder="Contraseña" name="Contraseña"/>
        </div>
        </div>
          <button class="btn btn-dark w-100"> Iniciar sesion</button>
        </div>
      </form>

      <div class="d-flex gap-1 justify-content-center mt-1">
        <div>¿No tienes una cuenta?</div>
        <a href="registrar.php" class="text-decoration-none text-info fw-semibold"
          >Registrate</a
        >
      </div>


    </div>
     
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
      crossorigin="anonymous">
    </script>
  </body>
</html>