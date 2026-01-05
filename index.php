<?php
$dir = __DIR__ . "/thumbs";
$files = array_filter(scandir($dir), function($f) {
    return preg_match('/\.(jpg|jpeg|png)$/i', $f);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>360° Gallery</title>
<style>
    body {
        margin: 0;
        background: #111;
        color: #fff;
        font-family: Arial, sans-serif;
    }
    h1 {
        text-align: center;
        padding: 20px;
        margin: 0;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
        padding: 20px;
    }
    .item {
        background: #222;
        padding: 10px;
        border-radius: 8px;
        text-align: center;
    }
    .item img {
        width: 100%;
        border-radius: 6px;
    }
    a {
        color: #0af;
        text-decoration: none;
    }
</style>
</head>
<body>

<h1>360° Image Gallery</h1>

<div class="grid">
<?php foreach ($files as $file): ?>
    <div class="item">
        <a href="/gallery/viewer.php?img=/gallery/images/<?php echo $file; ?>">
            <img src="/gallery/thumbs/<?php echo $file; ?>" alt="">
            <div style="font-size: 14px;"><?php echo htmlspecialchars($file); ?></div>
        </a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>
