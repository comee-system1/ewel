<?php if($_SESSION['error']):?>
    <div class="alert alert-danger" role="alert"><strong>アラート</strong> - <?=$_SESSION['error']?></div>
<?php endif;?>
<?php if($_SESSION['success']):?>
    <div class="alert alert-primary" role="alert"><strong>アラート</strong> - <?=$_SESSION['success']?></div>
<?php endif;?>

<?php
    unset($_SESSION[ 'error' ]);
    unset($_SESSION[ 'success' ]);
?>