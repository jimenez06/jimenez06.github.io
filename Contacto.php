<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LOGOUTCOFFE.jpg.jpg">
    <link rel="stylesheet" href="estilos/estiloContacto.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title> Contacto </title>

    <script src="https://kit.fontawesome.com/a86e5d6d6f.js" crossorigin="anonymous"></script>
	
        
</head>


<body>
    
    <header class="encabezado">
        <div class="contenedor-navegacion">
            <div class="contenido-navegacion contenedor">
                <div class="logo">
                    
                    <nav class="menu-memo">
        
                        <a href="index.html" id="btn-inicio">Inicio</a>
                        <a href="Menu.html" id="btn-menu">Menú</a>
                        <a href="#" id="btn-pedido">Pedido</a>
                        <a href="Contacto.html" id="btn-contacto">Contacto</a>
                        <a href="Sesion.html" id="btn-sesion">Iniciar Sesión</a>
                
                    </nav>
                </div>
            </div>
        </div>
        
    </header>



<section>
    <div id="for-main">
    <div id="form-div">
        <form  method="POST" >
            
            <p class="name">

                <h1> Contactanos </h1>
                <input name="name" type="text" class="input"
                id="name" placeholder="Name" required />
            </p>

            <p class="email">
                <input name="email" type="email" class="input"
                id="email" placeholder="Email" required/>
            </p> 
            

            <p class="text">
                <textarea name="text" class="input"
                id="comment" placeholder="Comment" required></textarea>
            </p>

            <div class="submit">
                <input type="submit" value="SEND" name="enviar"
                id="button-blue"/>
            <div class="ease"></div>
            
        </form>
        </div>
    </div>
    </div>
</section>
			
              <div class="pie-pagina ">
                <div class="contenedor-piepagina contenedor">
                    <div class="info">
                        <h3>Dirección</h3>
                        <p>Av. de las Américas No. 100, 78430 Rancho Nuevo, S.L.P.</p>
                    </div>
                    <div class="info">
                        <h3>Horarios entre Semana</h3>
                        <p>Lunes y Jueves 7am - 3pm</p>
                        <p>+524448348300</p>
                    </div>
                    <div class="info">
                        <h3>Horarios fin de Semana</h3>
                        <p>Viernes - Sabado 7am - 8pm</p>
                        <div class="redes-sociales redes-pie">

                            <a href="https://www.facebook.com/profile.php?id=100085058588906&mibextid=ZbWKwL" > <i class="fab fa-facebook-square"></i>  </a>                                     
                            <a href="https://instagram.com/monkeyamazing0?igshid=NTc4MTIwNjQ2YQ==" >  <i class="fab fa-instagram-square"></i> </a>                
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <p>Todos los derechos reservados &copy; Monkey Amazing</p>
            </footer>
			

<?php
include("correo.php");
?>

    
</body>
</html>