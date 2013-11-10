<?php
namespace Ratchet;

interface MessageInterface {
    /**
     * Triggered when a client sends non binary data through the socket
     * @param  \Ratchet\ConnectionInterface $from The socket/connection that sent the message to your application
     * @param  string                       $msg  The message received
     * @throws \Exception
     */
    function onMessage(ConnectionInterface $from, $msg);

    /**
     * Triggered when a client sends binary data through the socket
     * @param  \Ratchet\ConnectionInterface $from The socket/connection that sent the message to your application
     * @param  string                       $msg  The message received
     * @throws \Exception
     */
    function onBinaryMessage(ConnectionInterface $from, $msg);
}