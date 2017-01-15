<?php
  require_once("editor/scripts/config.php");

  $mysqli = new mysqli($host, $user, $password, $db);

  if ($mysqli->connect_errno) {
    echo 'Ошибка соединения с БД \n"';
    echo "Номер_ошибки: " . $mysqli->errno . "<br>";
    echo "Ошибка: " . $mysqli->error . "<br>";
    $mysqli->close();
  }

  /*принудительно установил кодировку UTF-8 потому что иначе MYSQL не понимала
  со словами на русском языке*/
  if (!$mysqli->set_charset("utf8")) {
      /*printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);*/
      $mysqli->close();
  } else {
      /*printf("Текущий набор символов: %s\n", $mysqli->character_set_name());*/
  }

  $dataArr = array();

  $sql = "SELECT * FROM `text_elements`";

  if (!$result = $mysqli->query($sql)) {
    echo 'Ошибка соединения с БД \n"';
    echo "Номер_ошибки: " . $mysqli->errno . "<br>";
    echo "Ошибка: " . $mysqli->error . "<br>";
    $mysqli->close();
  } else {

  }

  while ($row = $result->fetch_assoc()) {
    $dataArr[$row['name_element']] = $row['content'];

  }

  $mysqli->close();

?>
