from PIL import Image
from pathlib import Path

root = Path(r"D:\xampp\htdocs\Technofra-demo\new-2026-technofra")

files = [
    root / "assets/images/new/servicehome.webp",
    root / "assets/images/layers/map-layer.webp",
]

for source in files:
    output = source.with_name(source.stem + "-640.webp")

    with Image.open(source) as image:
        image.load()
        original_size = image.size

        if image.width > 640:
            new_height = round(image.height * 640 / image.width)
            image = image.resize(
                (640, new_height),
                Image.Resampling.LANCZOS
            )

        image.save(output, "WEBP", quality=80, method=6)

    print(
        source.name,
        original_size,
        "=>",
        output.name,
        f"{output.stat().st_size / 1024:.2f} KB"
    )
