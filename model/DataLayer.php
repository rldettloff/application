<?php
/**
 * Ryder Dettloff
Feb 2024
https://ryderdettloff.greenriverdev.com/328/application/
This is the datalayer page that holds the experience array to be accessed by controller
 */
class DataLayer
{
    static function getExperience(): array
    {
        return array('beginner', 'intermediate', 'pro');
    }

}
