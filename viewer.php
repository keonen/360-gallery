<?php
$img = isset($_GET['img']) ? $_GET['img'] : '/gallery/images/default.jpg';
$img = htmlspecialchars($img, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="js/aframe.min.js"></script>

<style>
  html, body { margin:0; height:100%; overflow:hidden; }

  #loader {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 22px;
    color: white;
    background: rgba(0,0,0,0.6);
    padding: 20px 30px;
    border-radius: 10px;
    z-index: 9999;
  }
</style>
</head>

<body>

<div id="loader">Loading…</div>

<a-scene id="scene">
  <a-sky id="sky" src="<?php echo $img; ?>"></a-sky>
</a-scene>

<script>
// Wait for A‑Frame to finish initializing
document.querySelector('#scene').addEventListener('loaded', () => {
    const sky = document.querySelector('#sky');
    const loader = document.querySelector('#loader');

    if (!sky) {
        console.error("Sky element not found");
        return;
    }

    // Hide loader when texture is ready
    sky.addEventListener('materialtextureloaded', () => {
        loader.style.display = 'none';
    });
});
</script>

</body>
</html>
