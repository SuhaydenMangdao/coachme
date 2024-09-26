<?php ob_start(); ?>
<form action="/<?= $user_type ?>/login" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="/<?= $user_type ?>/register">Register here</a>.</p>
<?php $content = ob_get_clean(); ?>
<?php $title = ucfirst($user_type) . " Login"; include 'layout.php'; ?>

