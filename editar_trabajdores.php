<?php
include 'bbdd.php';
if (conecta()){
        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $update_field = '';
            if (isset($input['name'])) {
                $update_field .= "name='" . $input['name'] . "'";
            } else if (isset($input['surname'])) {
                $update_field .= "surname='" . $input['surname'] . "'";
            } else if (isset($input['mail'])) {
                $update_field .= "mail='" . $input['mail'] . "'";
            }
            if ($update_field && $input['DNI']) {
                $sql_query = "UPDATE trabajadores SET $update_field WHERE DNI='" . $input['DNI'] . "'";
                $consultaTrabajadores or die("database error:" . mysqli_error($conn));
            }
        }
        } ?>