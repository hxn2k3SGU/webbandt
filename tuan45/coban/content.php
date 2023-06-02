<?php
if(isset($_GET['vitri']))
{
    if($_GET['vitri']=='tc')
    echo "<h1>bạn đang chọn trang chủ</h1>";
    elseif($_GET['vitri']=='gt')
    echo "<h1>bạn đang chọn trang giới thiệu</h1>";
    elseif($_GET['vitri']=='ttts')
    echo "<h1>bạn đang chọn trang thông tin tuyển sinh</h1>";
    elseif($_GET['vitri']=='ttdt')
    echo "<h1>bạn đang chọn trang thông tin đào tạo</h1>";
}   
?>




