<?php
class csvImport extends dbCon
{
    private $state_csv = false;

    //Importiert die CSV-Datei
    public function import($file)
    {
        $file = fopen($file, "r");

        //Rows will be read in
        while($row = fgetcsv($file))
        {
            //implode — Verbindet Array-Elemente zu einem String
            $value = "'".implode("','", $row)."'";
            $query = "INSERT INTO file(age,name,lastname) VALUES ($value)";
            if($this->query($query))
            {
                $this->state_csv= true;
            }else{
                $this->state_csv= false;
            }
        }
        if ($this->state_csv)
        {
            echo ("Import Erfolgreich!");
        }else{
            echo("Import fehlgeschlagen!");
        }
    }
}
?>