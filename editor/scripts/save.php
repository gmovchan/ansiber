<?php
  header("Content-Type: text/html; charset=utf-8");
  session_start();
  if (!$_SESSION["AUTH"]) {
    die;
  }

  require_once("config.php");

  $postArray = array();
  if (isset($_POST)){
      foreach ($_POST as $key=>$value){
        $postArray[$key]=$value;
      }
  }

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

  foreach ($postArray as $key => $value) {

    if ($key !== 'btn_btn-default') {

      $sql = "SELECT * FROM `text_elements` WHERE `name_element` = '$key'";

      if (!$result = $mysqli->query($sql)) {
        echo 'Ошибка соединения с БД \n"';
        echo "Номер_ошибки: " . $mysqli->errno . "<br>";
        echo "Ошибка: " . $mysqli->error . "<br>";
        $mysqli->close();
      } else {

      }

      if ($result->num_rows === 0) {
        $sql = "INSERT INTO `text_elements` (`name_element`, `content`)
                           VALUES ('$key', '$value')";

        if (!$result = $mysqli->query($sql)) {
         echo 'Ошибка соединения с БД \n"';
         echo "Номер_ошибки: " . $mysqli->errno . "<br>";
         echo "Ошибка: " . $mysqli->error . "<br>";
         $mysqli->close();
        } else {

        }

      } else {
        $sql = "UPDATE `text_elements` SET
          `content` = '$value' WHERE `name_element` = '$key'";

        if (!$result = $mysqli->query($sql)) {
         echo 'Ошибка соединения с БД \n"';
         echo "Номер_ошибки: " . $mysqli->errno . "<br>";
         echo "Ошибка: " . $mysqli->error . "<br>";
         $mysqli->close();
        } else {

        }
      }
    }
  }

  echo "Текст обновлен!";

?>
