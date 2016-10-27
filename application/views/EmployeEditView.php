<!DOCTYPE html> 
<html lang = "en">

    <head> 
        <meta charset = "utf-8"> 
        <title>Students Example</title> 
    </head>

    <body> 
        <a href = "addEmployeView">Add</a>

        <?php
        echo form_open('EmployeController/editEmploye');

        echo form_input(array('id' => 'id', 'name' => 'id', 'value' => $employe->id));
        
        echo form_label('Name');
        echo form_input(array('id' => 'name', 'name' => 'name', 'value' => $employe->name));
        echo "<br/>";


        echo form_label('Nomor telphone');
        echo form_input(array('id' => 'phone', 'name' => 'phone', 'value' => $employe->phone));
        echo "<br/>";


        echo form_label('Kota');
        echo form_input(array('id' => 'city', 'name' => 'city', 'value' => $employe->city));
        echo "<br/>";

        echo form_label('Kelamin');
        echo form_input(array('id' => 'sex', 'name' => 'sex', 'value' => $employe->sex));
        echo "<br/>";

        echo form_label('Posisi');
        echo form_input(array('id' => 'potition', 'name' => 'potition', 'value' => $employe->potition));
        echo "<br/>";


        echo form_label('Status');
        echo form_input(array('id' => 'status', 'name' => 'status', 'value' => $employe->status));
        echo "<br/>";

        echo form_submit(array('id' => 'submit', 'value' => 'Add'));
        echo form_close();
        ?> 
    </body>

</html>