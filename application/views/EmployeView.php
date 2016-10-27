<!DOCTYPE html> 
<html lang = "en">

    <head> 
        <meta charset = "utf-8"> 
        <title>Students Example</title> 
    </head>

    <body> 
        <a href = "/BekUpBackEnd/index.php/EmployeController/addEmployeView">Add</a>

        <table border = "1"> 
            <?php
            $i = 1;
            echo "<tr>";
            echo "<td>No</td>";
            echo "<td>Name</td>";
            echo "<td>Nomor pegawai</td>";
            echo "<td>Phone</td>";
            echo "<td>City</td>";
            echo "<td>Potition</td>";
            echo "<td>Kelamin</td>";
            echo "<td>Delete</td>";
            echo "<td>Edit</td>";
            echo "<tr>";
            
            
            foreach ($employe as $r) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $r->name . "</td>";
                echo "<td>" . $r->id . "</td>";
                echo "<td>" . $r->phone . "</td>";
                echo "<td>" . $r->city . "</td>";
                echo "<td>" . $r->potition . "</td>";
                echo "<td>" . $r->sex . "</td>";
                echo "<td><a href ='/BekUpBackEnd/index.php/EmployeController/deleteEmploye/".$r->id."'>Delete</a></td>";
                echo "<td><a href = '/BekUpBackEnd/index.php/EmployeController/editEmployeView/".$r->id."'>Edit</a></td>";
                echo "<tr>";
            }
            ?>
        </table> 

    </body>

</html>