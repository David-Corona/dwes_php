
<div id="registro">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>Registro</h1>
            <hr>

            <?php include __DIR__ . '/partials/show-error.part.php' ?>

            <form class="form-horizontal" action="/check-registro" method="post">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Username</label>
                        <input class="form-control" type="text" name="username" value="<?= $username ?? '' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Re-Password</label>
                        <input class="form-control" type="password" name="re-password">
                        <button class="pull-right btn btn-lg sr-button">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
