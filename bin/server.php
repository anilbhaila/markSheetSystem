<?php
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use gameLiveScores\Scores;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new WsServer(
        new Scores()
    )
    , 8080
);

$server->run();