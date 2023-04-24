<?php
/**
 * Connexion PDO base de donnée
 */
function connexionBDD($server, $dbname, $user, $password) {
    try {
        $pdo = new PDO("mysql:host={$server};port=3306;dbname={$dbname};charset=utf8", $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connexion impossible à la base de donnée";
    }
}



function show($table, $champ)
{
    $response = [];
    global $pdo; 
    $query = $pdo->query("SELECT $champ FROM $table");
    
    while ($elements = $query->fetch())
    {
        array_push($response, $elements);
    }
    return $response;
}

function showLast($table, $champ)
{
    $response = [];
    global $pdo; 
    $query = $pdo->query("SELECT $champ FROM $table ORDER BY $champ DESC LIMIT 1");
    while ($elements = $query->fetch())
    {
        array_push($response, $elements);
    }
    return $response;
}

function showAll($filters = null)
{
    $where = "";
    if (!is_null($filters)) {
        $where = "WHERE ";
        $i = $j = 0;
        foreach ($filters as $filter => $value) {
            $and="";
            if ($i > 0) {
                $and = " AND ";
            }
            if (is_array($value)) {
                foreach ($value as $el) {
                    if ($j > 0) {
                        $and = " OR ";
                    }
                    $where .= $and.$filter."=".$el;
                    $j ++;
                }
            } else {
                $where .= $and.$filter."=".$value;
            }
            $i ++;
        }
    }
    $response = [];
    global $pdo; 
    $request = "SELECT es.nom, es.prenom, eg.libelle lib_groupe, ef.libelle, esf.date_debut, esf.date_fin FROM exam3_salarie es 
    JOIN exam3_salarie_form esf ON es.id_salarie = esf.id_salarie
    JOIN exam3_formation ef ON esf.id_formation = ef.id_formation 
    JOIN exam3_groupe eg ON ef.id_groupe = eg.id_groupe $where";
    $query = $pdo->query($request);
    
    while ($elements = $query->fetch())
    {
        array_push($response, $elements);
    }
    return $response;
}

function insert($table, $champ, $value)
{
    global $pdo; 
    $prepare = $pdo->prepare("INSERT INTO $table($champ) VALUE($value)");
    $prepare->execute();
}
