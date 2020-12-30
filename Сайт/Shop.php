<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Магазин";
 require_once "blocks/head.php"
?>
<body>
<?php require_once "blocks/header.php" ?>
<?php require_once "database/database.php"

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM Магазин";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);

?>

<?php require_once "blocks/footer.php" ?>
</body>

</html>
