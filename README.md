# 360° VR Image Viewer & Gallery

A lightweight 360° image viewer designed for desktop browsers, mobile devices, and VR headsets such as the **Pico 4** using the **Wolvic** browser.  
The viewer is built using **A‑Frame**, supports **WebXR**, and loads images dynamically via a simple PHP parameter.

---

## 🚀 Features

- **360° equirectangular image viewing**
- **Native VR mode** through WebXR (Wolvic / Pico 4 compatible)
- **Dynamic image loading** using `?img=` URL parameter
- **Loading screen** while textures decode
- **YouTube‑style drag direction** (optional)
- **Ultra‑simple deployment** — just drop into any PHP‑enabled web server
- **Works offline** and on local networks

---

## 📦 How It Works

### 1. Load an image via URL parameter

The viewer accepts an image path like this:

```
viewer.php?img=/gallery/images/IMG_20260105_095606_00_004.jpg
```

If no parameter is provided, a default image is shown.

### 2. PHP injects the image into A‑Frame

```php
<a-sky src="<?php echo $img; ?>"></a-sky>
```

This makes the viewer extremely flexible — you can generate links dynamically, build galleries, or integrate with upload scripts.

### 3. VR mode (WebXR)

When opened in **Wolvic** on a **Pico 4**, the viewer automatically shows a VR button.  
Entering VR gives full head‑tracking and immersive viewing.

### 4. Loading overlay

A small loader is shown until the 360° texture is fully decoded:

```js
sky.addEventListener('materialtextureloaded', () => {
    loader.style.display = 'none';
});
```

This prevents the user from seeing a blurry or stretched placeholder.

---

## 📁 File Structure

```
/viewer.php        → Main 360° viewer
/js/aframe.min.js  → A‑Frame library
/gallery/images/   → Your 360° images
/gallery/thumbs/   → Your 360° thumbnail images
/README.md         → This file
/LICENSE           → MIT License
```

---

## 🖼 Example Usage

Open a 360° image:

```
https://yourdomain.com/viewer.php?img=/gallery/images/panorama.jpg
```

Embed in HTML:

```html
<a href="viewer.php?img=/gallery/images/panorama.jpg">Open in VR</a>
```

---

## 🧩 Requirements

- PHP-enabled web server (Apache, Nginx, Caddy, etc.)
- A‑Frame 1.4+
- HTTPS recommended for WebXR
- VR headset + Wolvic browser for immersive mode

---

## 🛠 Future Ideas

- Automatic folder-based gallery
- Next/previous navigation inside VR
- Hotspots and annotations
- Slideshow mode
- Auto‑generate thumbnails

---

## 📜 License

This project is licensed under the **MIT License**.

See below for full text.

---

# MIT License

```
MIT License

Copyright 2026 keonen

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
