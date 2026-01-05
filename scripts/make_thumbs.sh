#!/bin/bash

SRC="/var/www/html/vr.kng.fi/gallery/images"
DST="/var/www/html/vr.kng.fi/gallery/thumbs"

mkdir -p "$DST"

for img in "$SRC"/*.jpg; do
    filename=$(basename "$img")
    thumb="$DST/$filename"

    if [ ! -f "$thumb" ]; then
        echo "Creating thumbnail for $filename"
        convert "$img" -resize 256x "$thumb"
    else
        echo "Thumbnail already exists for $filename, skipping"
    fi
done
