<?php namespace FreeEmailChecker;

class FreeEmailChecker
{

    /**
     * Takes an email address and returns whether the email domain
     * belongs to a free email provider.
     *
     * @param  string $emailAddress
     * @return boolean
     */
    public function check($emailAddress)
    {
        $emailDomain = $this->getEmailDomain($emailAddress);

        $emailBeginningCharacter = substr($emailDomain, 0, 1);

        switch ($emailBeginningCharacter) {
            case '1':

                break;
        }
    }


    /**
     * Takes an email address and returns its email domain
     *
     * @param  string $emailAddress
     * @return string
     */
    private function getEmailDomain($emailAddress)
    {
        $emailArray = explode('@', $emailAddress);
        return array_pop($emailArray);
    }

    private function isGenericEmailBeginningA($emailDomain)
    {

    }
}




