<?php
// Definir variables dinámicas (si las necesitas)
$lastUpdated = "19 de noviembre de 2024";
$title = "Servicel - Ayuda";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/css/style.css">
  <style>
    .red-asterisk {
      color: red;
    }
  </style>
</head>

<body>

  <main>

    <h2>Ayuda de Servicel</h2>
    <p>En este artículo les presentamos algunas preguntas y respuestas que creemos pueden ser de ayuda a muchos.</p>
    <br>
    <p style="font-size: 14px; color: darkgray;">Actualizado el <?php echo $lastUpdated; ?></p>

    <br>
    <h4>1. ¿Qué es Servicel?</h4>
    <p>Servicel es una aplicación gratuita, creada con el objetivo de brindar una herramienta para ayudar a los usuarios de ETECSA con la gestión de los servicios móviles.</p>
    <br>

    <h4>2. ¿Qué debo hacer para usar la aplicación?</h4>
    <p>Debe contar con un dispositivo con sistema operativo Android 6.0 en adelante, una cuenta en el <a href="https://www.nauta.cu">Portal Nauta</a> y acceso a datos móviles o Wi-Fi.</p>
    <br>

    <h4>3. ¿Consume datos usar la aplicación?</h4>
    <p>No, la aplicación no consume datos. Aunque su móvil muestre que tiene un uso de datos, este no se refleja en ninguno de sus paquetes de datos.</p>
    <br>

    <h4>4. No tengo una cuenta, ¿qué debo hacer?</h4>
    <p>Puede registrarse desde la aplicación o desde <a href="https://www.nauta.cu/">www.nauta.cu</a>. Una vez registrado, puede usar la aplicación con normalidad.</p>
    <br>

    <h4>5. Tengo una cuenta, pero no recuerdo mi contraseña, ¿qué puedo hacer?</h4>
    <p>Desde la propia aplicación puede cambiar su contraseña de acceso o hacerlo desde <a href="https://www.nauta.cu/">www.nauta.cu</a>.</p>
    <br>

    <h4>6. La aplicación no muestra el captcha, por lo que no puedo iniciar sesión.</h4>
    <p>Hemos detectado que en muchos dispositivos, principalmente Xiaomi, se encuentra configurado el DNS<span class="red-asterisk">*</span> manualmente para usar el proveedor de DNS AdGuard. Esto impide que los dispositivos accedan a <a href="https://www.nauta.cu">www.nauta.cu</a>, afectando también a la aplicación. Una solución podría ser configurar en los <b>Ajustes de Red</b> el proveedor de DNS en automático.</p>

    <br><br>
    <p style="font-size: 12px; color: darkgray;">DNS: Los servidores DNS convierten las solicitudes de nombres en direcciones IP, controlando a qué servidor se dirigirá un usuario final cuando escriba un nombre de dominio en su navegador web.</p>

  </main>
</body>

<footer>
  <p>Copyright ©️ - <?php echo date("Y"); ?></p>
</footer>

</html>