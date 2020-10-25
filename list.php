<?
 
    $dbh = new PDO('mysql:host=localhost;dbname=cy67981_123', 'cy67981_123', 'cy67981_123');
    $sth = $dbh->prepare("SELECT `time`, name, email FROM `order`");
    $sth->execute();
    $data = $sth->fetchAll();
 
    header('Content-Type: text/plain; charset=utf-8');
    print_r($data);