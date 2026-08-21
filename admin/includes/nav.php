<?php
// Expects $currentUser (from auth.php) to be in scope.
?>
<nav class="navbar navbar-expand navbar-light bg-white border-bottom mb-4">
  <div class="container-fluid px-4">
    <span class="navbar-brand fw-bold">Orb-Ed Admin</span>
    <div class="navbar-nav me-auto">
      <a class="nav-link" href="posts.php">Posts</a>
      <a class="nav-link" href="categories.php">Categories</a>
      <?php if (isAdmin()): ?>
        <a class="nav-link" href="users.php">Users</a>
      <?php endif; ?>
    </div>
    <span class="navbar-text me-3">
      <?php echo htmlspecialchars($currentUser['display_name'] ?: $currentUser['username']); ?>
      <span class="badge bg-light text-dark border"><?php echo htmlspecialchars($currentUser['role']); ?></span>
    </span>
    <a href="logout.php" class="btn btn-sm btn-outline-secondary">Log Out</a>
  </div>
</nav>
