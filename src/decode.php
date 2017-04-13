<?php

namespace TheTribe\JSON;

/**
 * @param string $json
 * @param int $depth
 * @param int $options
 *
 * @return mixed
 *
 * @throws DecodeException
 */
function decode($json, $options = 0, $depth = 512)
{
    $value = \json_decode($json, false, $depth, $options);

    if (\JSON_ERROR_NONE !== $error = \json_last_error()) {
        throw new DecodeException(\json_last_error_msg(), $error);
    }

    return $value;
}
