<html>

<head>
    <title> Delice des fruits et legemes </title>
</head>

<body>
    <h1>
        <CENTER> <BR /> Delice des fruits et legemes </CENTER>
    </h1>
    <table WIDTH=100%>
        <tr>
            <?php $image=['1.png','2.png','00.jpg']; shuffle($image); for($i=0;$i<3;$i++){
                echo "<td align = 'center'> <img src = \"" ;

                echo $image [$i] ;

                echo " \" width='115' height='115' </td>" ;
                }
                ?>
        </tr>
    </table>
</body>

</html>