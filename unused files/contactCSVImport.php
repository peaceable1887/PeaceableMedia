<form action="../index.php?_ijt=contact" method="post" enctype="multipart/form-data">
    <h3>Datei Hochladen</h3>
    <input type="file" name="myfile"><br>
    <button type="submit" name="save">Hochladen</button>
</form>
<?php
include("../database/csvImport.php");
$csv = new csvImport();
if(isset($_POST["sub"]))
{
    $csv->import($_FILES["file"]["tmp_name"]);
}
?>