<?php

namespace App\Whatsapp;

class Whatsapp 
{
    public static function message($telephone, $message)
    {

        $url = 'https://api.itafarmadistribuidora.com.br/api/messages/send';

        // Dados para enviar no corpo da requisição
        $data = [
            "number" => $telephone, 
            "body" => $message
        ];

        // Inicializa a sessão cURL
        $curl = curl_init();

        // Configurações da requisição
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POST => true,
            CURLOPT_SSL_VERIFYPEER => false, // Ignora verificação SSL (útil para desenvolvimento, evite em produção)
            CURLOPT_POSTFIELDS => json_encode($data),  // Converte dados para JSON
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer diario',  // Cabeçalho de autenticação
                'Content-Type: application/json'        // Tipo de conteúdo
            ]
        ]);

        // Executa a requisição e captura a resposta
        $response = curl_exec($curl);

        // Verifica se ocorreu algum erro
        if (curl_errno($curl)) {
            //echo 'Erro na requisição: '.curl_error($curl);
            return false;
        } else {
            // Exibe a resposta da API
            //echo 'Resposta: '.$response;
            return true;
        }

        // Fecha a sessão cURL
        curl_close($curl);

    }
}