<!DOCTYPE html> 
<html lang = "en">

    <head> 
        <meta charset = "utf-8"> 
        <title>Students Example</title> 
    </head>

    <body> 
        <a href = "<?php echo base_url(); ?>
           index.php/stud/add_view">Add</a>

        <table border = "1"> 
            <?php
            $i = 1;
            echo "<tr>";
            echo "<td>Sr#</td>";
            echo "<td>Roll No.</td>";
            echo "<td>Name</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<tr>";

            foreach ($records as $r) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $r->nama . "</td>";
                echo "<td>" . $r->id_pegawai . "</td>";
                echo "<td><a href = '" . base_url() . "index.php/stud/edit/"
                . $r->no_telp . "'>Edit</a></td>";
                echo "<td><a href = '" . base_url() . "index.php/stud/delete/"
                . $r->no_telp . "'>Delete</a></td>";
                echo "<tr>";
            }
            ?>
        </table> 

    </body>

</html>