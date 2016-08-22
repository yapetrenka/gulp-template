<?include($_SERVER['DOCUMENT_ROOT']."/templates/header.tpl.php")?>
<header class="main-header">
    <div class="layout-main">
        header
    </div>
</header>

<div class="main-center<?=$page!='index' ? ' layout-main' : ''?>">
    <?if ($page!='index') {?>
        <h1 class="ttl-base"><?=$PAGE['meta_title']?></h1>
    <?}?>