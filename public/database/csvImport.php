<?php
class csvImport extends mysqli
{
    private $state_csv = false;
    //Stellt die Verbindung zur Datenbank her
    public function __construct()
    {
        parent::__construct("localhost","root", "", "pmediadb");
        if($this->connect_error)
        {
            echo ("Datenbankverbindung fehlgeschlagen".$this->connect_error);
        }
    }
    //Importiert die CSV-Datei
    public function import($file)
    {
        $file = fopen($file, "r");

        while($row = fgetcsv($file))
        {
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