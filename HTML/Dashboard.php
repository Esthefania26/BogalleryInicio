<?php
$mysqli = new mysqli("localhost", "root", "", "bogalleryf33");
?>
<?php
// Iniciar sesión
session_start();

// Verificar si el usuario no está autenticado
if (!isset($_SESSION['correo_usu'])) {
    // Redirigir a la página de inicio de sesión si no está autenticado
    header("Location:loginn.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link de los iconos -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../HTML/css/Dashboard.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <!-- barra lateral -->
    <div class="sidebar">
      <div class="logo-details">
        <img src="../HTML/imag/logo.png" alt="" class="logo" />
        <span class="logo_name">BoGallery</span>
      </div>
      <!-- navegadores -->
      <!-- Los i son los iconos -->
      <ul class="nav-links">
        <li>
          <a href="crudj/usuario.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Category</a></li>
          </ul>
        </li>
        <!-- completo con sus submenis -->
        <li>
          <div class="icon-links">
            <a href="#">
              <i class="bx bx-collection"></i>
              <span class="link_name">Historica</span>
            </a>
            <i class="bx bxs-down-arrow arrow"></i>
          </div>
          <!-- Son los sub menus -->
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Inf Historica</a></li>
            <li><a href="crudj/index.php">Lugares</a></li>
            <li><a href="#">.....</a></li>
            <li><a href="#">.....</a></li>
          </ul>
        </li>
        <!-- completo con sus submenis -->
        <li>
          <div class="icon-links">
            <a href="#">
              <i class="bx bx-book-alt"></i>
              <span class="link_name">Eventos Pla</span>
            </a>
            <i class="bx bxs-down-arrow arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Eventos Pla</a></li>
            <li><a href="crud/views/Index.php">Planes</a></li>
            <li><a href="#">.....</a></li>
            <li><a href="#">.....</a></li>
          </ul>
        </li>
        <!-- completo con sus submenis -->
        <li>
          <div class="icon-links">
            <a href="#">
              <i class="bx bx-collection"></i>
              <span class="link_name">Guias</span>
            </a>
            <i class="bx bxs-down-arrow arrow"></i>
          </div>
          <!-- Son los sub menus -->
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Guias</a></li>
            <li><a href="crudE/index.php">Guias</a></li>
            <li><a href="#">.....</a></li>
            <li><a href="#">.....</a></li>
          </ul>
        </li>

        <!-- el otro dasboar -->
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Usuario</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Category</a></li>
          </ul>
        </li>
        <!-- el otro dasboar -->
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Temas</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Category</a></li>
          </ul>
        </li>
        <!-- completo con sus submenis -->
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Cnfiguracion</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="error404.html">Category</a></li>
          </ul>
        </li>
        <li>
          <!-- barra inferior -->
          <div class="profile-details">
            <div class="profile-content">
              <img src="../HTML/imag/profile.jpeg" alt="profile" />
            </div>

            <div class="name-job">
              <div class="profile_name">Esthefania</div>
              <div class="job">web desginer</div>
            </div>
            <a href="crudj/logout.php" id="logoutButton">
  <i class="bx bx-log-out"></i>
</a>
          </div>
        </li>
      </ul>
    </div>
<!-- PARTE DONDE VA IR EL CRUD -->
<section class="home-section">
  <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Drop Down Sidebar</span>
      
  </div>
  <iframe id="crudFrame" src="" frameborder="0" width="100%" height="100%" style="display: none;"></iframe>
</section>
    

    <h1>HOLA</h1>

    <script>
      // Función para mostrar el CRUD en el iframe al hacer clic en el enlace
      const crudLink = document.querySelector('a[href="crudj/index.php"]');
      crudLink.addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('crudFrame').style.display = 'block';
          document.getElementById('crudFrame').src = this.getAttribute('href');
      });
  </script>
    <script>
      // Función para mostrar el CRUD en el iframe al hacer clic en el enlace
      const crudLink2 = document.querySelector('a[href="crud/views/Index.php"]');
      crudLink2.addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('crudFrame').style.display = 'block';
          document.getElementById('crudFrame').src = this.getAttribute('href');
      });
  </script>
  <script>
    // Función para mostrar el CRUD en el iframe al hacer clic en el enlace
    const crudLink3 = document.querySelector('a[href="crudj/usuario.php"]');
    crudLink3.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('crudFrame').style.display = 'block';
        document.getElementById('crudFrame').src = this.getAttribute('href');
    });
</script>
<script>
  // Función para mostrar el CRUD en el iframe al hacer clic en el enlace
  const crudLink4 = document.querySelector('a[href="crudE/index.php"]');
  crudLink4.addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('crudFrame').style.display = 'block';
      document.getElementById('crudFrame').src = this.getAttribute('href');
  });
</script>

    <script>
      let arrow = document.querySelectorAll(".arrow");

      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          
          let arrowParent = e.target.parentElement.parentElement;
        
          arrowParent.classList.toggle("showMenu");
        });
      }


      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx-menu");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", function(){
        sidebar.classList.toggle("close");

      });

    </script>


  </body>
</html>
