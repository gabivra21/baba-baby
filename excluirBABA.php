<?php
    require 'configu.php';
    /*delete BABA*/
    $id = filter_input(INPUT_GET, 'idBaba');
    $sql = $pdo->prepare("DELETE FROM baba WHERE idBaba = :idBaba");
    $sql->bindValue(':idBaba', $id);
    $sql->execute();
    header("Location: selectBABA.php");
?>
