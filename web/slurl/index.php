<!DOCTYPE html>
<html>
<body>
<?php
    require '../../etc/settings.php';

    if ($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $region_name = test_input($_GET['regionname'], $welcome_name);
        $region_x = test_num_input($_GET['x'], $welcome_x);
        $region_y = test_num_input($_GET['y'], $welcome_y);
        $region_z = test_num_input($_GET['z'], $welcome_z);
    } else die("");

    function test_input($data, $default)
    {
        if (empty($data)) return $default;
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function test_num_input($data, $default)
    {
        if (empty($data)) return $default;
        if (!is_numeric($data)) return $default;
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);
    if (mysqli_connect_error())
    {
        die("Database down");
    }

    $sql = "SELECT locX, locY, sizeX, sizeY FROM regions WHERE regionName='$region_name' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $xcoord = $row["locX"] / 256; // worldmap coord, so div by standard region size
        $ycoord = $row["locY"] / 256;
        $sizeX = $row["sizeX"] / 256;
        $sizeY = $row["sizeY"] / 256;
    } else {
        die("The region is not online or does not exist");
    }
    $conn->close();

    echo "<h1>" . $region_name . "</h1>\n";
    echo "<table style=\"border-spacing:0; border-collapse: collapse; position: relative;\">\n";
    for ($row = $sizeY; $row > 0; $row--)
    {
        echo "  <tr style=\"padding:0;\">\n";
        for ($col = 0; $col < $sizeX; $col++)
        {
            echo "    <td style=\"padding:0;\"><img style=\"display:block;\" src=\"http://" . $grid_uri . "/map-1-" . ($xcoord+$col) . "-" . ($ycoord+$row-1) . "-objects.jpg\" /></td>\n";
        }
        echo "  </tr>\n";
    }
    echo "  <tr><td span=\"$sizeX\"><div style=\"position:absolute;top:" . (($sizeY*256)-$region_y) . "px;left:" . $region_x . "px;\">&#x1F4CC</div></td></tr>\n";
    echo "</table>\n";
    echo "<p><a href=\"secondlife://" . $region_name . "/" . $region_x .
            "/" . $region_y . "/" . $region_z . "\">Local Teleport</a></p>\n";
    echo "<p><a href=\"hop://" . $grid_uri . "/" . $region_name . "/" .
            $region_x . "/" . $region_y . "/" . $region_z . "\">Hop Teleport</a></p>\n";

?>
</body>
</html>
