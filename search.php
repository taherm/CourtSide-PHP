<?php
//if(isset($_POST['sel2'])){
    $select2 = $_POST['sel2'];
    switch ($select2) {
        case 'all':
            echo 'this is value1<br/>';
            break;
        case 'five':
            echo 'value2<br/>';
            break;
		case 'eleven':
            echo 'value2<br/>';
            break;
        default:
            echo "nothing";
            break;
    }
}
?>