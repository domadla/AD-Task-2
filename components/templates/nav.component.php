<?php
function navHeader($navList)
{
?>
    <header>
        <nav>
            <ul>
                <?php foreach ($navList as $item): ?>
                    <li><a href="<?php echo htmlspecialchars($item['url']); ?>"><?php echo htmlspecialchars($item['label']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
<?php
}
?>