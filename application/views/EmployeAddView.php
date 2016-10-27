<!DOCTYPE html> 
<html lang = "en">

    <head> 
        <meta charset = "utf-8"> 
        <title>Students Example</title> 
    </head> 
    <body> 
        <?php
        echo form_open('EmployeController/addEmploye');

        echo form_label('Name');
        echo form_input(array('id' => 'name', 'name' => 'name'));
        echo "<br/>";


        echo form_label('Nomor telphone');
        echo form_input(array('id' => 'phone', 'name' => 'phone'));
        echo "<br/>";


        echo form_label('Kota');
        echo form_input(array('id' => 'city', 'name' => 'city'));
        echo "<br/>";

        echo form_label('Kelamin');
        echo form_input(array('id' => 'sex', 'name' => 'sex'));
        echo "<br/>";

        echo form_label('Posisi');
        echo form_input(array('id' => 'potition', 'name' => 'potition'));
        echo "<br/>";


        echo form_label('Status');
        echo form_input(array('id' => 'status', 'name' => 'status'));
        echo "<br/>";

        echo form_submit(array('id' => 'submit', 'value' => 'Add'));
        echo form_close();
        ?> 
    </body>
</html>