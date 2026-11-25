from PIL import Image
from pathlib import Path

root = Path(r"D:\xampp\htdocs\Technofra-demo\new-2026-technofra")
files = [
    root / "assets/images/layers/map-layer.webp",
    root / "assets/images/layers/map-layer-640-q65.webp",
]

for path in files:
    with Image.open(path) as im:
        print("File:", path.name)
        print("Dimensions:", im.size)
        print("Mode:", im.mode)
        print("Has transparency:", (
            im.mode in ("RGBA", "LA") or "transparency" in im.info
        ))
        print("Size KB:", round(path.stat().st_size / 1024, 2))
        print("---")
