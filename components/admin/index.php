<?php
if(isset($_POST['type']) && isset($_POST['db'])){
    if($_POST['db'] == 0){
        $db = 0;
        switch ($_POST["type"]) {
            case 0:
                //ver
                return include './adminVer.php';
                break;
            case 1:
                //update
                return include './adminUpdate.php';
                break;
            case 2:
                //delete
                return include './adminDelete.php';
                break;
            case 3:
                //create
                return include './adminCreate.php';
                break;
        }
    }else if($_POST['db'] == 1){
        $db = 1;
        switch ($_POST["type"]) {
            case "0":
                //ver
                return include './adminVer.php';
                break;
            case "1":
                //update
                return include './adminUpdate.php';
                break;
            case "2":
                //delete
                return include './adminDelete.php';
                break;
            case "3":
                //create
                return include './adminCreate.php';
                break;
        }
    }else{
        $db = 2;
        switch ($_POST["type"]) {
            case "0":
                //ver
                return include './adminVer.php';
                break;
            case "1":
                //update
                return include './adminUpdate.php';
                break;
            case "2":
                //delete
                return include './adminDelete.php';
                break;
            case "3":
                //create
                return include './adminCreate.php';
                break;
        }
    }
}else{
    echo "error 404";
}
