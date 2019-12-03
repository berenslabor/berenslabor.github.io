<?php
$offer_url = 'https://m-f1.top/go-land/962/112'; //партнерская ссылка из пп как есть
$label = $_GET['label'] ?? 0;
$api_url = 'https://gstuk.top/request-domain';
$result = json_decode(file_get_contents($api_url), true);
$parsed_offer_url = parse_url($offer_url);
$result_url = $result['redirect_domain'].$parsed_offer_url['path'].'?label='.$label;
header('Location: ' . $result_url);
