<h2><?php echo $title; ?></h2>

<?php foreach ($users as $user): ?>

        <h3><?php echo $user['id']; ?></h3>
        <div class="main">
                <?php echo $user['name']; ?>
                <?php echo $user['E_mail']; ?>
                <?php echo $user['role']; ?>
        </div>

<?php endforeach; ?>