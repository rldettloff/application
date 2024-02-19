<?php
/*
 * Ryder Dettloff
Feb 2024
https://ryderdettloff.greenriverdev.com/328/application/
This is my validation file. it checks each code indiviual making sure
it follows the standards I set in place on my html pages.\
 */
class Validate
{
    static function validFirstName($firstName): bool
    {
        return trim($firstName) != "";
    }

    static function validLastName($lastName): bool
    {
        return trim($lastName) != "";
    }

    static function validGithub($githubLink): bool
    {

        return filter_var($githubLink, FILTER_VALIDATE_URL) !== false;
    }

    static function validExperience($yearsOfExperience): bool
    {

        return in_array($yearsOfExperience, (new DataLayer)->getExperience());
    }

    static function validPhone($phone): bool
    {

        $phoneNumbers = preg_replace('/[^0-9]/', '', $phone);

        return strlen($phoneNumbers) === 10;
    }

    static function validEmail($email): bool
    {

        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}