<?php
class generatePassword extends userData
{
    public function generate()
    {
        // return if alert
        if (is_string($this->getUserData()))
            return array('alert', $this->getUserData());

        // include params
        if (is_array($this->getUserData())) {
            $params = $this->getUserData();
            $password_params = [
                0 => range('A', 'Z'),
                1 => range('a', 'z'),
                2 => range(0, 9),
                3 => array('!', '#', '$', '%', '&', '*', '+', '=', '?'),
                4 => array(html_entity_decode('&#34'), html_entity_decode('&#39'), html_entity_decode('&#40'), html_entity_decode('&#41'), html_entity_decode('&#44'), '-', '.', '/', ':', ';', '<', '>', '[', html_entity_decode('&#92'), ']', '^', '_', '`', '{', '|', '}', '~')
            ];
            $password_elements = array();
            for ($i = 0; $i < count($params) - 2; $i++) {
                if ($params[$i] == 1) {
                    for ($a = 0; $a < count($password_params[$i]); $a++) {
                        array_push($password_elements, $password_params[$i][$a]);
                    }
                }
            }
            // include user_characters
            $user_characters = str_replace(' ', '', $params[count($params) - 2]);
            if (!empty($user_characters)) {
                for ($i = 0; $i < strlen($user_characters); $i++) {
                    array_push($password_elements, $user_characters[$i]);
                }
            }
            // password generate
            $password_lenght = intval($params[count($params) - 1]);
            $password_chars = array();
            for ($i = 0; $i < $password_lenght; $i++) {
                $password_chars[$i] = $password_elements[rand(0, count($password_elements) - 1)];
            }
            $password = strval(implode($password_chars));
            // return password
            return array('password', $password);
        }
    }
}
