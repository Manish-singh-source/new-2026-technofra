from PIL import Image
from pathlib import Path

root = Path(r"D:\xampp\htdocs\Technofra-demo\new-2026-technofra")

source = root / "assets/images/layers/map-layer.webp"
output = source.with_name("map-layer-640-q65.webp")

with Image.open(source) as image:
    image = image.convert("RGBA")
    image.thumbnail((640, 640), Image.Resampling.LANCZOS)
    image.save(output, "WEBP", quality=65, method=6)

print("Created:", output.name)
print("Size:", round(output.stat().st_size / 1024, 2), "KB")
