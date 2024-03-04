<?php
/**
 * Ryder Dettloff
 * Feb 2024
 * https://ryderdettloff.greenriverdev.com/328/application/
 * This is my validation file. it checks each code indiviual making sure
 * it follows the standards I set in place on my html pages.\
 */
class model
{
    /**
     * @param $firstName
     * @return bool
     * validates first name
     */
    static function validFirstName($firstName): bool
    {
        return trim($firstName) != "";
    }

    /**
     * @param $lastName
     * @return bool
     * validates last name
     */
    static function validLastName($lastName): bool
    {
        return trim($lastName) != "";
    }

    /**
     * @param $githubLink
     * @return bool
     * validates github link
     */
    static function validGithub($githubLink): bool
    {

        return filter_var($githubLink, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * @param $yearsOfExperience
     * @return bool
     * validates years of experience
     */
    static function validExperience($yearsOfExperience): bool
    {

        return in_array($yearsOfExperience, (new DataLayer)->getExperience());
    }

    /**
     * @param $phone
     * @return bool
     * validates phone number
     */
    static function validPhone($phone): bool
    {

        $phoneNumbers = preg_replace('/[^0-9]/', '', $phone);

        return strlen($phoneNumbers) === 10;
    }

    /**
     * @param $email
     * @return bool
     * validates email
     */
    static function validEmail($email): bool
    {

        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}