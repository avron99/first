<?php $view->extend('::base.html.php') ?>
<style type="text/css">
    h2 {
        padding-left: 20px;
            }

</style>

<h1>Hello Application</h1>

<?php $view['slots']->output('_content') ?>
<?php $view['slots']->set('title', 'Hello World Application') ?>
<h2><a href="http://46.182.31.66/test/Symfony/web/app_dev.php/new">new comment</a></h2> <br>
<h2><a href="http://46.182.31.66/test/Symfony/web/app_dev.php/old">history</a></h2>