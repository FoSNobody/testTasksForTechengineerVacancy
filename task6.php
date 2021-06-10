<?php

$allImageUrls = [];
$allUrls = [];
$urlContent = file_get_contents('https://www.magneticone.com/');
$dom = new DOMDocument();
@$dom->loadHTML($urlContent);

parseImageUrls($allImageUrls, $dom);
parseUrls($allUrls, $dom);

echo "All image urls from magneticone main page:\n";
print_r($allImageUrls);

echo "All urls from magneticone main page:\n";
print_r($allUrls);

function parseImageUrls(&$allImageUrls, $dom) {
    $imageTags = $dom->getElementsByTagName('img');

    foreach($imageTags as $tag) {
        $imgUrl = $tag->getAttribute('src');
        if (strpos($imgUrl, 'http') === false && empty(pathinfo($imgUrl, PATHINFO_EXTENSION))) {
            continue;
        }
        $allImageUrls[] = $imgUrl;
    }
}
function parseUrls(&$allUrls, $dom) {

    $xpath = new DOMXPath($dom);
    $hrefs = $xpath->evaluate("/html/body//a");

    for($i = 0; $i < $hrefs->length; $i++){
        $href = $hrefs->item($i);
        $url = $href->getAttribute('href');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        if (strpos($url, 'http') === false) {
            continue;
        }
        $allUrls[] = $url;
    }
}
