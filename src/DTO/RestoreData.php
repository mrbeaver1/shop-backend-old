<?php

namespace App\DTO;

use App\VO\Email;

class RestoreData implements RegisterInterface
{
    /**
     * @var Email
     */
    private Email $email;

    /**
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }
}
