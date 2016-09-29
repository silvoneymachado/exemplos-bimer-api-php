<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "50938",
  CURLOPT_URL => "http://localhost:50938/api/usuarios?nomeLogin=bernardo.dsn.erp",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJyb2xlIjoiVXNlciIsInVzZXI6aWQiOiIwMDEwMDAwM1ZWIiwidXNlcjplbWFpbCI6IiIsInVzZXI6dXNlck5hbWUiOiJLQVJPTyIsInVzZXI6Zmlyc3ROYW1lIjoiVXN1w6FyaW8gZG8gS2Fyb28gcGFyYSBjb25zdW1vIGRhIEFQSSBCaW1lciIsInVzZXI6bGFzdE5hbWUiOiIiLCJpc3MiOiJodHRwOi8vMTI3LjAuMC4xLyIsImF1ZCI6IjQxNGUxOTI3YTM4ODRmNjhhYmM3OWY3MjgzODM3ZmQxIiwiZXhwIjoxNDc1MTYxMDYxLCJuYmYiOjE0NzUxNjAxNjF9.QVQ1IfWE1PUDyEg9EiYvIFuKkfraW0K7ZdTHJv52pxM",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>