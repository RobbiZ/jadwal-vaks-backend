<?php
include 'koneksi.php';

$sql = "SELECT plasmaname FROM plasma";

$result = $kon->query($sql);

if ($result->num_rows >0){
    while($row[] = $result->fetch_assoc()){
        $item = $row;
        $json = json_encode($item);
    }
}
else{
    echo "No Results Found.";
}

echo $json;

$kon->close();

?>