<?php


class User
{
   protected $userId = 101;
   protected $email  = 'i.musabah92@gmail.com';

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
