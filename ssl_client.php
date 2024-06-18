<?php
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

$client = stream_socket_client("ssl://localhost:8443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);
if (!$client) {
    die("Failed to connect: $errstr ($errno)\n");
}

echo "Connected to server.\n";

fwrite($client, "Hello from Alice!\n");
$response = fread($client, 1024);
echo "Received from server: $response\n";

fclose($client);
?>
