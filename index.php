<?php require "templates/header.php"; ?>

<div class="hero">
    <div>
        <p class="eyebrow">Azure App Service Deployment</p>
        <h2>Azure Product Catalogue</h2>
        <p class="subtitle">A PHP CRUD application connected to Azure Database for MySQL.</p>
    </div>
</div>

<div class="dashboard-grid">
    <a class="action-card" href="read.php">
        <span>📦</span>
        <h3>View Catalog</h3>
        <p>View all products stored in MySQL.</p>
    </a>

    <a class="action-card" href="insert.php">
        <span>➕</span>
        <h3>Add Product</h3>
        <p>Create a new product record.</p>
    </a>

    <a class="action-card" href="update.php">
        <span>✏️</span>
        <h3>Update Product</h3>
        <p>Edit an existing product price.</p>
    </a>

    <a class="action-card danger" href="delete.php">
        <span>🗑️</span>
        <h3>Remove Product</h3>
        <p>Delete a product from the catalog.</p>
    </a>
</div>

<?php require "templates/footer.php"; ?>
