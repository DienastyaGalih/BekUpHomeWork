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


            
            <div class="example " >
                <h1>Daftar Pegawai</h1>
                <table class="table  hovered" id="main_table_demo">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Nomor pegawai</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Potition</th>
                            <th>Kelamin</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        foreach ($employe as $r) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $r->name . "</td>";
                            echo "<td>" . $r->id . "</td>";
                            echo "<td>" . $r->phone . "</td>";
                            echo "<td>" . $r->city . "</td>";
                            echo "<td>" . $r->potition . "</td>";
                            echo "<td>" . $r->sex . "</td>";
                            echo "<td><a href ='/BekUpBackEnd/index.php/EmployeController/deleteEmploye/" . $r->id . "'>Delete</a></td>";
                            echo "<td><a href = '/BekUpBackEnd/index.php/EmployeController/editEmployeView/" . $r->id . "'>Edit</a></td>";
                            echo "<tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div>
                <a href = "/BekUpBackEnd/index.php/EmployeController/addEmployeView"><button class="button">Add</button></a>
            </div>
    </body>
</html>