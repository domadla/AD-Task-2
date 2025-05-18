<?php
function displayGuitarCards($guitarList, $imgBasePath = 'assets/img/')
{
    foreach ($guitarList as $guitar):
        $imgSrc = isset($guitar['image']) ? $imgBasePath . $guitar['image'] : null;
?>
        <div class="guitar-card-box">
            <?php if ($imgSrc): ?>
                <img class="guitar-card-img" src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($guitar['name'] ?? 'Guitar'); ?>">
            <?php endif; ?>
            <h3 class="guitar-card-title"><?php echo htmlspecialchars($guitar['name'] ?? ''); ?></h3>
            <p class="guitar-card-desc"><?php echo htmlspecialchars($guitar['description'] ?? ''); ?></p>
            <?php if (isset($guitar['category'])): ?>
                <p class="guitar-card-meta"><strong>Category:</strong> <?php echo htmlspecialchars($guitar['category']); ?></p>
            <?php endif; ?>
            <?php if (isset($guitar['price'])): ?>
                <p class="guitar-card-meta"><strong>Price:</strong> $<?php echo htmlspecialchars($guitar['price']); ?></p>
            <?php endif; ?>
        </div>
<?php
    endforeach;
}
?>