<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">
    <title>Agenda Retiro - Ripley Chile</title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/login2.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">

    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">

    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.min.js') ?>"></script>

    <script>
        var GlobalVariables = {
            csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
            baseUrl: <?= json_encode($base_url) ?>,
            destUrl: <?= json_encode($dest_url) ?>,
            AJAX_SUCCESS: 'SUCCESS',
            AJAX_FAILURE: 'FAILURE'
        };

        var EALang = <?= json_encode($this->lang->language) ?>;

        var availableLanguages = <?= json_encode(config('available_languages')) ?>;

        $(function () {
            GeneralFunctions.enableLanguageSelection($('#select-language'));
        });
    </script>
</head>
    
    
<body>
    
<style>
    
    .btn-primary {
  background-color: #70578b;
  border-color: #70578b;
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited,
.btn-primary:focus {
  background-color:#513b69;
  border-color:#513b69;
    
}
    
       body {
   background-image: url('<?= asset_url('assets/fondoripleyfinal.png') ?>');
  background-repeat: repeat;
        
        
        
}
    
    
    </style>    
    
<div id="login-frame" class="frame-container">
    <h2 align="center">AGENDA RETIRO - ADMIN</h2>
    <p align="center"><?= lang('you_need_to_login') ?></p>
    <hr>
    <div class="alert d-none"></div>
    <form id="login-form">
        <div class="form-group">
            <label for="username"><?= lang('username') ?></label>
            <input type="text" id="username"
                   placeholder="<?= lang('enter_username_here') ?>"
                   class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password"><?= lang('password') ?></label>
            <input type="password" id="password"
                   placeholder="<?= lang('enter_password_here') ?>"
                   class="form-control"/>
        </div>

        <div class="form-group" align="center">
            <button type="submit" id="login" class="btn btn-primary">
                <i class="fas fa-sign-in-alt mr-2"></i>
                <?= lang('login') ?>
            </button>
        </div>

    
      
     

        <div class="mt-4">
            <small>
                Logística
                <a href="https://ripley.cl">Ripley Chile</a>
            </small>
        </div>
    </form>
</div>

<script src="<?= asset_url('assets/ext/fontawesome/js/fontawesome.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/fontawesome/js/solid.min.js') ?>"></script>
<script src="<?= asset_url('assets/js/polyfill.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
<script src="<?= asset_url('assets/js/login.js') ?>"></script>
</body>
</html>
