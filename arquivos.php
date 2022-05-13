<?php

foreach (new DirectoryIterator ('../media') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    $arqName = $fileInfo->getFilename();
    ?>

    <li><?php echo $arqName; ?></li>
<?php } ?>


