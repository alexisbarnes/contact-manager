<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, title, address, city, zip, phone, notes)
    VALUES
    (:first, :last, :title, :address, :city, :zip, :phone, :notes)
  ");

  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => $_POST['notes']
  ));

  $id = $db->lastInsertId();

  header('Location: http://localhost:8080/index.php?id=' . $id . '&created=true');

  ?>
