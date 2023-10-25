<?php 
session_start();
switch ($_SESSION['user']['rol_id'] )
{

    case 1:
        echo "el admin";
        break;

        case 2:
            echo "el maestro";
            break;

            case 3:
                echo "el alumno";
                break;
}



?>