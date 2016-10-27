<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
        <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
        <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Employe table</title>

        <link href="http://localhost/BekUpBackEnd/css/metro.css" rel="stylesheet">
        <link href="http://localhost/BekUpBackEnd/css/metro-icons.css" rel="stylesheet">
        <link href="http://localhost/BekUpBackEnd/css/metro-responsive.css" rel="stylesheet">
        <link href="http://localhost/BekUpBackEnd/css/metro-schemes.css" rel="stylesheet">
        <link href="http://localhost/BekUpBackEnd/css/docs.css" rel="stylesheet">
        <script src="http://localhost/BekUpBackEnd/js/jquery-2.1.3.min.js"></script>
        <script src="http://localhost/BekUpBackEnd/js/metro.js"></script>
        <script src="http://localhost/BekUpBackEnd/js/docs.js"></script>
        <script src="http://localhost/BekUpBackEnd/js/prettify/run_prettify.js"></script>
        <script src="http://localhost/BekUpBackEnd/js/ga.js"></script>


    </head>
    <body>
        <div class="container page-content">




            <div class="example " style="width: 400px" >
                <h2>Tambah Pegawai</h2>
                               
                <?php
                echo form_open('EmployeController/addEmploye');

                echo '<div class="input-control text">';
                echo form_input(array('id' => 'name', 'name' => 'name','placeholder'=>'Nama Pegawai'));
                echo "</div>  <br/>";

                echo '<div class="input-control text">';
                echo form_input(array('id' => 'phone', 'name' => 'phone','placeholder'=>'Nomor telphone'));
                echo "</div>  <br/>";


//                echo form_label('Kota');
                echo '<div class="input-control text">';
                echo form_input(array('id' => 'city', 'name' => 'city','placeholder'=>'Kota'));
                echo "</div>  <br/>";

//                echo form_label('Kelamin');
                echo '<div class="input-control text">';
                echo form_input(array('id' => 'sex', 'name' => 'sex','placeholder'=>'Kelamin'));
                echo "</div>  <br/>";

//                echo form_label('Posisi');
                echo '<div class="input-control text">';
                echo form_input(array('id' => 'potition', 'name' => 'potition','placeholder'=>'Posisi'));
                echo "</div>  <br/>";


//                echo form_label('Status');
                echo '<div class="input-control text">';
                echo form_input(array('id' => 'status', 'name' => 'status','placeholder'=>'Status'));
                echo "</div>  <br/>";

                echo form_submit(array('id' => 'submit', 'value' => 'Add'));
                echo form_close();
                ?>   
            </div>
    </body>
</html>