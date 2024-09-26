

<!-- ===== ACTIVATE SIDEBAR ===== -->
<!-- <?php
if (is_active_sidebar('blog-sidebar-1')) {
    echo "Sidebar is active.";
    dynamic_sidebar('blog-sidebar-1');
} else {
    echo "Sidebar is not active.";
}
?> -->

<?php if (is_active_sidebar('blog-sidebar-1')) : ?>
    <div class="sidebar">
        <?php dynamic_sidebar('blog-sidebar-1'); ?>
    </div>
<?php endif; ?>
