<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>

<div id="captcha"></div> 
<p style="color:red;">{{ captcha_status }}</p>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer></script>

<script>
    var onloadCallback = function() {
        widgetId1 = grecaptcha.render('captcha', {
            'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'theme' : 'light'
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer>