<?php

class Validate {
    static function validFirstName($firstName)
    {
        return trim($firstName) != "";
    }
    static function validLastName($lastName)
    {
        return trim($lastName) != "";
    }
    static function validGithub($githubLink) {

        return filter_var($githubLink, FILTER_VALIDATE_URL) !== false;
    }

    static function validExperience($yearsOfExperience) {

        return in_array($yearsOfExperience, DataLayer::getExperience());
    }
    static function validPhone($phone) {

        $phoneNumbers = preg_replace('/[^0-9]/', '', $phone);

        return strlen($phoneNumbers) === 10;
    }

    static function validEmail($email) {

        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

?>
