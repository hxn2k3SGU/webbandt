<?php
if (!empty($error['fullname']['required'])) {
    echo '<span style = "color :red;">' . $error['fullname']['required'] . '</span>';
}
?>


if (!empty($error['fullname']['required'])) {
echo '<span style="color :red;">' . $error['fullname']['required'] . '</span>';
}elseif(!empty($error['fullname']['min'])){
echo '<span style="color : red;">'. $error['fullname']['min'] . '</span>';
}











echo (!empty($error['email']['required'])) ? '<span style="color : red">' .$error['email']['required']. '</span>' : (!empty($error['email']['invaild']) ? '<span style="color : red">'.$error['email']['invaild'].'</span>');
?>