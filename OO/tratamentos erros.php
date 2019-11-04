<?php

try {
    echo ' <h3>*** Try ***</h3> ';
    $sql = 'select *from clientes';
    // mysql_query($sql); // erro
    if (!file_exists('require_arquivo.pqp')) {
        throw new Exception('O arquivo não diponível, tente novamente mais tarde!');
    }

} catch(Error $e) {
    echo ' <h3>*** Catch Error ***</h3> ';
    echo "<p style='color: red'> $e </p> ";

} catch (Exception $e) {
    echo ' <h3>*** Catch Exception ***</h3> ';
    echo "<p style='color: red'> $e </p> ";
} finally {
    echo ' <h3>*** Finally ***</h3> ';
}
?>