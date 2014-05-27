<?php $view->extend('::base.html.php') ?>
    <style type="text/css">
        h2 {
            padding-left: 20px;
        }

    </style>

    <h1>Hello Application</h1>

<?php $view['slots']->output('_content') ?>
<?php $view['slots']->set('title', 'Hello World Application') ?>