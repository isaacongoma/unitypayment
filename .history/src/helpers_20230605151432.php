<?php

/**
 * These optional helper functions wrap around the various mpesa API classes for more concise code
 */

if (!function_exists("mpesa_setup_mpesa")) {
    function mpesa_setup_config($config = [], $api = "C2B")
    {
        $API = "Ongoma\\LipaNaMpesa\\Mpesa\\{$api}";
        return $API::init($config);
    }
}

if (!function_exists("mpesa_setup_stk")) {
    function mpesa_setup_stk($config = [])
    {
        return Ongoma\UnityPayment\STK::init($config);
    }
}

if (!function_exists("mpesa_setup_c2b")) {
    function mpesa_setup_c2b($config = [])
    {
        return Ongoma\UnityPayment\C2B::init($config);
    }
}

if (!function_exists("mpesa_setup_b2c")) {
    function mpesa_setup_b2c($config = [])
    {
        return Ongoma\UnityPayment\B2C::init($config);
    }
}

if (!function_exists("mpesa_setup_b2b")) {
    function mpesa_setup_b2b($config = [])
    {
        return Ongoma\UnityPayment\B2B::init($config);
    }
}

if (!function_exists("mpesa_stk_push")) {
    function mpesa_stk_push($phone, $amount, $reference)
    {
        return Ongoma\UnityPayment\C2B::stk($phone, $amount, $reference);
    }
}

if (!function_exists("mpesa_c2b_request")) {
    function mpesa_c2b_request($phone, $amount, $reference)
    {
        return Ongoma\UnityPayment\C2B::simulate($phone, $amount, $reference);
    }
}

if (!function_exists("mpesa_b2c_request")) {
    function mpesa_b2c_request($phone, $amount, $reference)
    {
        return Ongoma\UnityPayment\B2C::send($phone, $amount, $reference);
    }
}

if (!function_exists("mpesa_b2b_request")) {
    function mpesa_b2b_request($phone, $amount, $reference)
    {
        return Ongoma\UnityPayment\B2B::send($phone, $amount, $reference);
    }
}

if (!function_exists("mpesa_validate")) {
    function mpesa_validate(callable $callback = null)
    {
        return Ongoma\UnityPayment\Service::validate($callback);
    }
}

if (!function_exists("mpesa_confirm")) {
    function mpesa_confirm(callable $callback = null)
    {
        return Ongoma\UnityPayment\Service::confirm($callback);
    }
}

if (!function_exists("mpesa_reconcile")) {
    function mpesa_reconcile(callable $callback = null)
    {
        return Ongoma\UnityPayment\Service::reconcile($callback);
    }
}

if (!function_exists("mpesa_results")) {
    function mpesa_results(callable $callback = null)
    {
        return Ongoma\UnityPayment\Service::results($callback);
    }
}

if (!function_exists("mpesa_timeout")) {
    function mpesa_timeout(callable $callback = null)
    {
        return Ongoma\UnityPayment\Service::timeout();
    }
}
