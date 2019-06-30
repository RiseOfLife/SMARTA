<?

$token = 'CggaATEVAgAAABKABDVFlu08J8WVNI1iu4FDG_GVqglaw0H697IhwbRDdIchkljPY4DefuZui4ZioxLhDbqKDXYiRRM4ApCBfJf5zhlH_NBNj03nJ7dlb0v6kDtaVV2KH6qgV70XTPp-3Y-KAvhgHOguDlU8YMUQM7acL3OryQQFFoarw-iR3TXIuWDyE9PRf03tTY17MhrFLIK_Rou1-Ro8YNZ7yhRf-tHwoT4E590lVA2bqSoLqOPovbQstTTTW6t816MdW_SzAhJuzqX9pCPZarhenlWB4dHBbNXExW7eggW3vS2MX8bFYUlaN1_2vAyTj-IYDckTbDsj1zWOSUoaCbBG029vUxDKb9d7GblISi3GwuEBX_dPggkgRfKm8V-Wr3ZbNQ4nYtWSqpA9kHJYxfcwUNzIhUn7SLIMaMkwpdqUf2m8bQFaGUY317DrO_YSQMSYmtMjgdVxWK_6BR5FvGGWj6KSj0u8h5OKIGOpbNxSgnIoutr7SL6ICc834aN0F5pNtpps794l79xQq-YY3GYS-tuxRaYehtwxHri4mcRZRi6eM7LgOPP_nEPlt7P8zsLSkdJ_-UiB1Cc96Cw71nz8ackFLsQwZLamWHsrmqoPdQCkSUQvekEBc7GVD9t3bEgOkWaK5hTl1542LcBcR1zYFgrLDNITUxn84faRA3t4rIFd8qcJtb65GmsKIGNmNDkzZjJlOTY3MTRkMjVhODUwYjUwNzRhNjI3MDAzELux4egFGPuC5OgFIikKFGFqZW4zcmI4NTMzanIxZG8yNHM2EhFhbmRyZWkubi5lcm1vbGFldloAMAI4AUoIGgExFQIAAABQASD6BA'; # IAM-токен
$folderId = "b1gvr2vhp85gvc3mndc1"; # Идентификатор каталога
$url = "https://tts.api.cloud.yandex.net/speech/v1/tts:synthesize";

$post = "text=" . urlencode("Hello World") . "&lang=en-US&folderId=${folderId}";
$headers = ['Authorization: Bearer ' . $token];
$ch = curl_init();

curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
if ($post !== false) {
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


$response = curl_exec($ch);
if (curl_errno($ch)) {
    print "Error: " . curl_error($ch);
}
if (curl_getinfo($ch, CURLINFO_HTTP_CODE) != 200) {
    $decodedResponse = json_decode($response, true);
    echo "Error code: " . $decodedResponse["error_code"] . "\r\n";
    echo "Error message: " . $decodedResponse["error_message"] . "\r\n";
} else {
    file_put_contents("speech.ogg", $response);
}
curl_close($ch);
?>