<?php
$this ->load->view("admin/_partials/head.php")
?>

<div class="container">
        <div class="panel panel-default">
            <form action="<?= base_url ('admin/login')?>"method= "post">
                <div class="col-md-4 col-md-offset-4 kotak">
                    <h3>Silahkan Login ... </h3>
                    <div class="input-group">
                        <span class = "input-group-addon"><span class="glyphicon glypichon - user"></span></span>
                        <input type="text" class="form-control"placeholder="Username" name="uname">
                    </div>
                    <div class ="input-group">
                        <span class = "input-group-addon"><span class="glyphicon glypichon -lock"></span></span>
                        <input type="password" class="form-control"placeholder="Password" name="pass">
                    </div>
                    <div class="input-group">
                        <input type="submit" class="tn btn-primary" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>