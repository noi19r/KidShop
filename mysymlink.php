<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/kidshop/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/kidshop/public/storage';
symlink($targetFolder, $linkFolder);
echo 'Success';
