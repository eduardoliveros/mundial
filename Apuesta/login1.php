<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>mundial</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.addEventListener('resize', Zoom);

        function Zoom() {

            document.body.style.display = "none";
            ancho = window.innerWidth;
            var Z = ancho.toFixed(5) * (100.00000 / ((1366).toFixed(5)))
            document.body.style.zoom = Z + "%";
            document.body.style.display = "block";
        }
    </script>
</head>

<body style="display:none" onload="Zoom();">
    <div class="bloque0">
        <img src="image/14993.png" class="imgbloque0">
    </div>
    <div class="bloque1">
        <div>

            <div  class="polla ">
                <img class='imgpolla' src='image/16184.png'>
            </div>
                 <img class="image7297" src="image/7297.png"  >
            <div class="Trau ">
                <img src="image/1110.png " class="imgtrau ">
                <div class="pand "></div>
            </div>
        </div>
        <div>
      
            <div class="ajuste">
              <div class="textingreso"> Datos de registro</div>
               
                <input id="nombre" type="text" placeholder="Nombre y apellidos" >
                <input id="cedula" type="text" placeholder="c.c">
                <input id="mail" type="text"  placeholder="e-mail"><br>
                <button class="enviar" type="button ">  &nbsp Enviar &nbsp
                    <img src="image/4569.png " height="15px ">
                </button>
           
            </div>
        </div>
        <div class="terminos ">Material exclusivo para médicos de laboratorios Heel.
            <br>
            <br>
            
            <br>
            <br>
        </div>
        <div class="pie ">
            <img class="pieLogo " src="image/14982.png ">
           
        </div>

    </div>
  

</body>
<script type="text/javascript" src="js/main.js"></script>

</html>
