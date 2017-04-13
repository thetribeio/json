<?php

namespace TheTribe\JSON;

/**
 * @param mixed $value
 * @param int $options
 * @param int $depth
 *
 * @return string
 *
 * @throws EncodeException
 */
function encode($value, $options = 0, $depth = 512)
{
    $json = \json_encode($value, $options, $depth);

    if (\JSON_ERROR_NONE !== $error = \json_last_error()) {
        throw new EncodeException(\json_last_error_msg(), $error);
    }

    return $json;
}
