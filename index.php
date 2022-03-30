<?php
header('Content-Type: text/html; charset=UTF-8'); 


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['save'])) {
      print('Спасибо, результаты сохранены.');
    }
    include('form.php');
    exit();
}

$result;

try{
    $errors = FALSE;
    if (empty($_POST['field-name'])) {
        print('Заполните имя.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['field-email'])) {
        print('Заполните почту.<br/>');
        $errors = TRUE;
    }

    if (empty($_POST['bio'])) {
        print('Заполните биографию.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['check-1'])) {
        print('Вы должны быть согласны с условиями.<br/>');
        $errors = TRUE;
    }

    
    if ($errors) {
        exit();
    }
    $name = $_POST['field-name'];
    $email = $_POST['field-email'];
    $dob = $_POST['field-date'];
    $gender = $_POST['radio1'];
    $limbs = $_POST['radio2'];
    $bio = $_POST['bio'];
    $che = $_POST['check-1'];
    
    $sup= implode(",",$_POST['superpowers']);

    $conn = new PDO("mysql:host=localhost;dbname=u47473", 'u47473', '8848569', array(PDO::ATTR_PERSISTENT => true));

    $user = $conn->prepare("INSERT INTO form SET name = ?, email = ?, birth = ?, gender = ?,limbs = ?, bio = ?, box = ?");

    $user -> execute([$name, $email, date('d-m-y', strtotime($dob)),$gender,$limbs,$bio,$che]);
    $id_user = $conn->lastInsertId();

    $user1 = $conn->prepare("INSERT INTO super SET id = ?, super_name = ?");
    $user1 -> execute([$id_user, $sup]);
    $result = true;
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}


if ($result) {
  echo "Информация занесена в базу данных под ID №" . $id_user;
}
?>
