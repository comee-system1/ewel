<div class="row mt20">
    <div class="col-md-12">
    <?php if($key >= 2):?>
        <input type="submit" name="back" value="前のページ" class="btn btn-info">
    <?php endif;?>
    <?php if($key == 24):?>
    <input type="submit" name="next" value="完了" class="btn btn-primary">
    <?php else:?>
        <input type="submit" name="next" value="次のページ" class="btn btn-primary">
    <?php endif;?>
    <input type="hidden" name="temp" value="page">
    <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
    <input type="hidden" id="time" name="time" value="<?=$time?>">
    <input type="hidden" name="key" value="<?=$key?>">
    </div>
</div>