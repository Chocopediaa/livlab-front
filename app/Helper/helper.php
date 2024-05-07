<?php
    use GuzzleHttp\Client;

    if(!function_exists('getApiData')) {
        function getApiData($endpoint, $params) {
            $client = new Client();

            $main_url = "https://app-livinglab.sumedangkab.go.id/api/web/";
            // $main_url = "http://127.0.0.1:8000/api/web/";

            $url_header = $main_url.$endpoint;

            try {
                $response_header = $client->request('GET', $url_header, [
                    'query' => $params,
                    'verify'  => false,
                ]);
                
                // dd($response_header);
                $resBody = json_decode($response_header->getBody());


                return $resBody;
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                if ($e->hasResponse()) {
                    $resBody = 'error';
                }
            }
            if ($resBody == 'error') {
                return null;die;
            }
        }
    }
?>