<?php
class getPassword extends generatePassword
{
    public function showPassword()
    {
        $result = $this->generate();
        if ($result[0] == 'alert') {
            echo "<script type='text/javascript'>alertSend('$result[1]');</script>";
        }

        if ($result[0] == 'password') {
            echo "<script type='text/javascript'>modal('$result[1]');</script>";
        }
    }
}
