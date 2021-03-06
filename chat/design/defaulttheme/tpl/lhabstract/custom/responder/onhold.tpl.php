<div class="form-group">
    <label><?php echo $fields['wait_timeout_hold']['trans'];?></label>
    <?php echo erLhcoreClassAbstract::renderInput('wait_timeout_hold', $fields['wait_timeout_hold'], $object)?>
</div>

<h4><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('abstract/widgettheme','Choose what bot trigger element append after auto responder message')?></h4>

<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label><?php echo $fields['onhold_bot_id']['trans'];?></label>
            <?php echo erLhcoreClassAbstract::renderInput('onhold_bot_id', $fields['onhold_bot_id'], $object)?>
        </div>
        <div class="form-group">
            <label><?php echo $fields['onhold_trigger_id']['trans'];?></label>
            <div id="onhold-trigger-list-id"></div>
        </div>
    </div>
    <div class="col-xs-6">
        <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('abstract/widgettheme','Preview')?></label>
        <div id="onhold-trigger-preview-window">

        </div>
    </div>
</div>

<?php for ($i = 1; $i <= 5; $i++) : ?>
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label><?php echo $fields['wait_timeout_hold_' . $i]['trans'];?></label>
                <?php echo erLhcoreClassAbstract::renderInput('wait_timeout_hold_' . $i, $fields['wait_timeout_hold_' . $i], $object)?>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label><?php echo $fields['timeout_hold_message_' . $i]['trans'];?></label>
                <?php echo erLhcoreClassAbstract::renderInput('timeout_hold_message_' . $i, $fields['timeout_hold_message_' . $i], $object)?>
            </div>
        </div>
    </div>
<?php endfor;?>