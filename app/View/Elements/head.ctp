<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        
        // css
//        echo $this->Html->css('bootstrap');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('charisma-app');
        echo $this->Html->css('fullcalendar');
        echo $this->Html->css('fullcalendar.print');
        echo $this->Html->css('chosen.min');
        echo $this->Html->css('colorbox');
        echo $this->Html->css('responsive-tables');
        echo $this->Html->css('bootstrap-tour.min');
        echo $this->Html->css('jquery.noty');
        echo $this->Html->css('noty_theme_default');
        echo $this->Html->css('elfinder.min');
        echo $this->Html->css('elfinder.theme');
        echo $this->Html->css('jquery.iphone.toggle');
        echo $this->Html->css('uploadify');
        echo $this->Html->css('animate.min');
        
        // js
        echo $this->Html->script('jquery.min');
        
        echo $this->fetch('meta');
        echo $this->fetch('css');
//        echo $this->Html->script('jquery-1.11.2');
//        echo $this->Html->script('bootstrap');
    ?>
</head>