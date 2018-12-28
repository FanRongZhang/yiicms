<div style="width:80%;margin:0 auto;">
    <h3><?= $aryTheRecord['title'] ?></h3>
    <div>
        <?= $aryTheRecord['content'] ?>
    </div>
    <?php
    if(isset($aryTheRecord['importantinfo'])):
    ?>
    <div>
        <?= $aryTheRecord['importantinfo'] ?>
    </div>
    <?php
    endif;
    ?>
</div>