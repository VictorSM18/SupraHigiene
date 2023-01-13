</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Bienvenido :Invitado"; 
         } 
          else
          { 
              echo "Bienvenido : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Articulos
          </a>
        </div>
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Registrarse</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">Mi cuenta</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Iniciar sesion</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Cerrar sesion</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Tienda
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="#">
                Mi cuenta
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Configuracion de la cuenta</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mi lista de deseados</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mis ordenes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ver carrito de compras</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Configurar cuenta</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Cambiar contraseña</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Eliminar cuenta</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>