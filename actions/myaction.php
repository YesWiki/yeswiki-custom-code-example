<!-- {{myaction}} -->
<!-- {{myaction myparam="true"}} -->

<h1><?php echo _t('MY_KEY'); ?></h1>

<?php if ($this->GetParameter('myparam') == "true") { ?>
    <p>More text</p>
<?php } ?>