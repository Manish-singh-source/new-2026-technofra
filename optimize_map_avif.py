from PIL import Image
from pathlib import Path

root = Path(r"D:\xampp\htdocs\Technofra-demo\new-2026-technofra")

source = root / "assets/images/layers/map-layer.webp"
output = root / "assets/images/layers/map-layer-800.avif"

with Image.open(source) as image:
    image = image.convert("RGBA")
    image.thumbnail((800, 800), Image.Resampling.LANCZOS)

    image.save(
        output,
        format="AVIF",
        quality=55,
        speed=6
    )

    print("Created:", output.name)
    print("Resolution:", image.size)
    print("Mode:", image.mode)
    print("File size:", round(output.stat().st_size / 1024, 2), "KB")

with Image.open(output) as check:
    print("AVIF verification:", check.format)
    print("Transparency channel:", "A" in check.getbands())
