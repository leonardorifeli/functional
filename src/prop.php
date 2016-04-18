<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prop()
{
    $args = func_get_args();

    /**
     * @param string $prop
     * @param array  $ls
     *
     * @return bool
     */
    $prop = function ($prop, $ls) {
        if (has($prop, $ls)) {
            return $ls[$prop];
        }

        return false;
    };

    return call_user_func_array(curry($prop), $args);
}