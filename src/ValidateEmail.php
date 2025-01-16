<?php
namespace App;

class ValidateEmail
{

    function validateEmail($email)
    {
        if (strpos($email, '@') === false) {
            return false;
        }

        $parts = explode('@', $email);
        if (count($parts) !== 2) {
            return false;
        }

        $localPart = $parts[0];
        $domain    = $parts[1];

        if (strlen($localPart) === 0 || strlen($domain) < 3) {
            return false;
        }

        $domainExtension = explode('.', $domain);
        if (
            count($domainExtension) < 2 ||
            in_array('', $domainExtension, true) ||
            strlen(end($domainExtension)) < 2
        ) {
            return false;
        }

        return true;
    }

}
