<?php

function redirect($response, $to, $statusCode = 200)
{
    return $response->withHeader('location', $to)->withStatus($statusCode);
}
