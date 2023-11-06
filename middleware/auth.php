<?php
$user = user();

if (!$user) {
    redirect('/dang-nhap');
}
