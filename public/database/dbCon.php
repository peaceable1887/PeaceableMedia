<?php
class dbCon extends mysqli
{
    //Stellt die Verbindung zur Datenbank her
    public function __construct()
    {
        parent::__construct("localhost", "root", "", "pmediadb");
        if ($this->connect_error) {
            echo("Datenbankverbindung fehlgeschlagen" . $this->connect_error);
        }
    }
}
