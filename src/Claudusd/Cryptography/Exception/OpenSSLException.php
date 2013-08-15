<?php

namespace Claudusd\Cryptography\Exception;

class OpenSSLException extends \RuntimeException
{
    public function __construct()
    {
        if(func_num_args() == 1) {
            $arg1 = func_get_arg(0);
            if(is_string($arg1)) {
                parent::__construct($arg1);
            } elseif(is_bool($arg1) && $arg1) {
                $exceptionMessage = '';
                while ($msg = openssl_error_string())
                    $exceptionMessage .= $msg.'. ';
                parent::__construct($exceptionMessage);
            }
        }
    }
}