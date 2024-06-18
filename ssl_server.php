<?php
$context = stream_context_create([
    'ssl' => [
        'local_cert' => 'cert.pem',
        'local_pk' => 'key.pem',
        'allow_self_signed' => true,
        'verify_peer' => false
    ]
]);

$server = stream_socket_server("ssl://0.0.0.0:8443", $errno, $errstr, STREAM_SERVER_BIND|STREAM_SERVER_LISTEN, $context);
if (!$server) {
    die("Failed to create server: $errstr ($errno)\n");
}

echo "Server listening on port 8443...\n";

while ($conn = @stream_socket_accept($server)) {
    echo "Connection accepted.\n";
    fwrite($conn, "Hello from Bob!\n");
    echo "Message sent to client.\n";
    fclose($conn);
}

fclose($server);
?>
