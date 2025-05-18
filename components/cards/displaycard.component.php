<?php
function displayGuitarCards($guitarList, $imgBasePath = '')
{
    foreach ($guitarList as $guitar):
        $imgSrc = $imgBasePath . $guitar['image'];
?>
        <div class="guitar-box" style="max-width: 400px; margin: 20px auto;">
            <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($guitar['name']); ?>" style="width:100%; border-radius: 8px; margin-bottom: 10px;">
            <h3 style="color: #ffcc00; margin: 0;"><?php echo htmlspecialchars($guitar['name']); ?></h3>
            <p style="color: #cccccc;"><?php echo htmlspecialchars($guitar['description']); ?></p>
        </div>
<?php
    endforeach;
}
?>