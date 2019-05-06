<?php
if(isset($_POST["reclamoTitulo"])){
        //url de la petición
$url = 'http://srv001-generarreclamo-losheroesbhp.apps.openshift-desa.losheroes.cl/srv001-generarreclamo';
 
//inicializamos el objeto CUrl
$ch = curl_init($url);
 
//el json simulamos una petición de un login
$jsonData = array(
    'reclamoTitulo' => $_POST["reclamoTitulo"], //código fijo
    'motivoReclamoId' => $_POST["motivoReclamoId"], 
    'reclamoObservacion' => $_POST["reclamoObservacion"], 
    'beneficiarioId' => $_POST["beneficiarioId"], 
    'empresaId' => $_POST["empresaId"]
);
 
//creamos el json a partir de nuestro arreglo
$jsonDataEncoded = json_encode($jsonData);
 //echo "acssa".$jsonDataEncoded; die;
//Indicamos que nuestra petición sera Post
//curl_setopt($ch, CURLOPT_POST, 1); //////////////////
 
 //para que la peticion no imprima el resultado como un echo comun, y podamos manipularlo
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
//Adjuntamos el json a nuestra petición
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Agregamos los encabezados del contenido
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
 
 //ignorar el certificado, servidor de desarrollo
          //utilicen estas dos lineas si su petición es tipo https y estan en servidor de desarrollo
 //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         //curl_setopt($process, CURLOPT_SSL_VERIFYHOST, FALSE);
 
//Ejecutamos la petición
$result = curl_exec($ch);

//echo "envia ".$result; //die;
//return $result["reclamoId"];
//close cURL resource
//$datos[]= array('reclamoId' => $result["reclamoId"]);
curl_close($ch);
$json_string = json_encode($result);

echo $json_string;

}