<?php ob_start(); ?>
<form action="/<?= $user_type ?>/register" method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <?php if ($user_type === 'instructor'): ?>
        <input type="text" name="specialization" placeholder="Specialization" required>
        <input type="time" name="available_from" required>
        <input type="time" name="available_to" required>
    <?php endif; ?>
    
    <button type="submit">Register</button>
</form>
<p>Already have an account? <a href="/<?= $user_type ?>/login">Login here</a>.</p>
<?php $content = ob_get_clean(); ?>
<?php $title = ucfirst($user_type) . " Registration"; include 'layout.php'; ?>
