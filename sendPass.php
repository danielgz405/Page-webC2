<?php
if(isset($_POST['name']) && isset($_POST['password'])){
        include("cn.php");
        $pass = "SELECT * FROM password";
        $response = false;
        $resultado = mysqli_query($conexion, $pass);
        while($row=mysqli_fetch_assoc($resultado)){
                if ($_POST['name'] == $row["name"] && $_POST['password'] == $row["password"]){
                        $response = true;
                        break;
                }else{
                        $response = false;
                }
        }

        if ($response == true){
                return include "./components/adminHome.php";
        }else{
                return include "./components/errorCredentials.php";
        }
}else{
        echo "error 404";
}
