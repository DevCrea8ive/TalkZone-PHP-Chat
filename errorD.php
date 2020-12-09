<?php if(count($errorD) > 0): ?>
    <div class='error'>
        <?php foreach($errorD as $error): ?>
            <?php echo $error."<div class='br'></div>" ?>
            <?php endforeach ?>
    </div>

    <?php endif ?>