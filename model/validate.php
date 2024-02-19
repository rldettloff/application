<?php

    function validFirstName($firstName): bool
    {
        return trim($firstName) != "";
    }
    function validLastName($lastName): bool
    {
        return trim($lastName) != "";
    }
    function validGithub($githubLink): bool
    {

        return filter_var($githubLink, FILTER_VALIDATE_URL) !== false;
    }

    function validExperience($yearsOfExperience): bool
    {

        return in_array($yearsOfExperience, (new DataLayer)->getExperience());
    }
    function validPhone($phone): bool
    {

        $phoneNumbers = preg_replace('/[^0-9]/', '', $phone);

        return strlen($phoneNumbers) === 10;
    }

    function validEmail($email): bool
    {

        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
