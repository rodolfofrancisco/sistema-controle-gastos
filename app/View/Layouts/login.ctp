<html>
    <?php echo $this->element('head'); ?>
<body>
    <div class="ch-container">
        <div class="row">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
    <?php echo $this->element('scripts'); ?>
</body>