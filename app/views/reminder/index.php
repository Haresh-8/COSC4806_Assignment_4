<?php require_once 'app/views/templates/header.php'; ?>

<div class="container mt-4">
    <h2>Your Reminders</h2>
    <!-- <a href="/reminder/create" class="btn btn-success mb-3">Add Reminder</a>-->
     
    <table class="table table-striped">
        <thead><tr><th>Subject</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
            <?php foreach ($data['reminders'] as $reminder): ?>
                <tr>
                    <td><?= htmlspecialchars($reminder['subject']) ?></td>
                    <td><?= $reminder['completed'] ? 'Done' : 'Pending' ?></td>
                    <td>
                        <a href="/reminder/edit/<?= $reminder['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/reminder/delete/<?= $reminder['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this reminder?')">Delete</a>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/home" class="btn btn-secondary mb-3">← Back to Home</a>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
