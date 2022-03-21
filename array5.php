<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2> Multidimensional Array </h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
            $movie = array(
                array("Avengers: Invinity War", 2018, 8.7),
                array("The Avengers", 2012, 8.1),
                array("Guardians of the Galaxy", 2014, 8.1),
                array("Iron Man", 2008, 7.9)
                );

                foreach($movie as $movieku){
                        echo '<tr>
                        <td>'. $movieku["judul"] .'</td>
                        <td>'. $movieku["tahun"] .'</td>
                        <td>'. $movieku["rate"] .'</td>
                        </tr>';  
                 }
                 echo '</table>';
            ?>
        </table>
    </body>
</html>

