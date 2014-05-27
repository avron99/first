<?php $view->extend('::base.html.php') ?>

    <h1>Hello Application</h1>

<?php $view['slots']->output('_content') ?>

<h2> Check this out</h2>
<style type="text/css">
    .block1 {
        width: 400px;
        background: #5bccc4;
        padding: 5px;
        padding-right: 20px;
        border: solid 1px black;
        float: left;
    }
    </style>
<form method="post" action="" class="form-insert">
    <div class="block1" >
        <legend>anketa</legend>
        <input type="text" class="span6" placeholder="name" name="name" value=""><br>
        <input type="text" class="span6" placeholder="work" name="work" value=""><br>
        <textarea name="comment" cols="40" rows="3" placeholder="comment"></textarea></p>
        <button type="submit" name="submit">submit</button>
    </div>
</form>
</head>
</html>