<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8002",
  CURLOPT_URL => "http://localhost:8002/api/clientes",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{' .
                        '  "Identificador": "",' .
                        '  "Enderecos": [' .
                        '    {' .
                        '      "CEP": "22060020",' .
                        '      "CodigoSuframa": "",' .
                        '      "Complemento": "",' .
                        '      "IdentificadorBairro": "00A00001R7",' .
                        '      "IdentificadorCidade": "00A000059E",' .
                        '      "IdentificadorTipoLogradouro": "",' .
                        '      "InscricaoEstadual": "",' .
                        '      "NomeLogradouro": "RUA LEOPOLDO MIGUEZ 99/202",' .
                        '      "NumeroLogradouro": "",' .
                        '      "Observacao": "11020258",' .
                        '      "PessoasContato": [' .
                        '        {' .
                        '          "ContatoPrincipal": true,' .
                        '          "Email": "email@globo.com",' .
                        '          "Identificador": "",' .
                        '          "Nome": "Pessoa de contato inserida pela API",' .
                        '          "PaginaInternet": "",' .
                        '          "TipoCadastro": "I",' .
                        '          "TelefoneCelular": "(0021)99999-9999",' .
                        '          "TelefoneFixo": "(0021)11111-111"' .
                        '        }' .
                        '      ],' .
                        '      "SiglaUnidadeFederativa": "RJ",' .
                        '      "TipoCadastro": "I",' .
                        '      "Tipos": {' .
                        '        "Cobranca": true,' .
                        '        "Comercial": true,' .
                        '        "Correspondencia": true,' .
                        '        "Entrega": true,' .
                        '        "Principal": true,' .
                        '        "Residencial": true' .
                        '      },' .
                        '      "Codigo": "01"' .
                        '    }' .
                        '  ],' .
                        '  "IdentificadorRepresentantePrincipal": "",' .
                        '  "Tipo": "F",' .
                        '  "Codigo": "",' .
                        '  "CpfCnpj": "01234567894",' .
                        '  "DataNascimento": "1980-04-26T00:00:00:000Z",' .
                        '  "Nome": "Nome Completo",' .
                        '  "NomeCurto": "Nome Curto"' .
                        '}',
  CURLOPT_HTTPHEADER => array(
    "authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJyb2xlIjoiVXNlciIsInVzZXI6aWQiOiIwMDEwMDAwM1ZWIiwidXNlcjplbWFpbCI6IiIsInVzZXI6dXNlck5hbWUiOiJLQVJPTyIsInVzZXI6Zmlyc3ROYW1lIjoiVXN1w6FyaW8gZG8gS2Fyb28gcGFyYSBjb25zdW1vIGRhIEFQSSBCaW1lciIsInVzZXI6bGFzdE5hbWUiOiIiLCJpc3MiOiJodHRwOi8vMTI3LjAuMC4xLyIsImF1ZCI6IjQxNGUxOTI3YTM4ODRmNjhhYmM3OWY3MjgzODM3ZmQxIiwiZXhwIjoxNDg5NDIxNzk1LCJuYmYiOjE0ODk0MjA4OTV9.JVBgZgJPsiQo6viC5MTllrPbSqm4Z6ATEnGK4QLcU9Y",
    "cache-control: no-cache",
    "content-type: application/json"
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