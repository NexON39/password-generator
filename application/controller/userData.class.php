<?php
class userData
{
    public function getUserData()
    {
        if (isset($_POST['submit_btn'])) {
            if (isset($_POST['uppercases']) || isset($_POST['lowercases']) || isset($_POST['numbers']) || isset($_POST['symbols']) || isset($_POST['othersymbols'])) {
                if (!empty($_POST['passwordlength'])) {
                    if (intval($_POST['passwordlength']) < 1 || intval($_POST['passwordlength']) > 2048)
                        return $alert = "Password length must be in the range 1-2048";
                } else
                    $_POST['passwordlength'] = 8;
                // get params
                $data = array($_POST['uppercases'], $_POST['lowercases'], $_POST['numbers'], $_POST['symbols'], $_POST['othersymbols']);
                $params = array();
                for ($i = 0; $i < count($data); $i++) {
                    if (isset($data[$i]))
                        $data[$i] = 1;
                    else
                        $data[$i] = 0;
                    array_push($params, $data[$i]);
                }
                array_push($params, $_POST['usercharacters']);
                array_push($params, intval($_POST['passwordlength']));
                // return params
                return $params;
            } else
                return $alert = "Complete at least one checkbox";
        }
    }
}
