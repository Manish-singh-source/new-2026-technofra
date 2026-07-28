#!/bin/bash
cd "$(dirname "$0")"

echo "============================================"
echo "  PDF Toolkit - Local Server (needed for OCR)"
echo "============================================"
echo ""
echo "Only the OCR checkbox in PDF to Word / PDF to Excel needs this."
echo "Every other tool works fine by just double-clicking index.html directly."
echo ""

open_browser() {
  sleep 1
  if command -v open &> /dev/null; then
    open http://localhost:8000/index.html
  elif command -v xdg-open &> /dev/null; then
    xdg-open http://localhost:8000/index.html
  fi
}

if command -v python3 &> /dev/null; then
  echo "Starting server with Python 3..."
  open_browser &
  python3 -m http.server 8000
elif command -v python &> /dev/null; then
  echo "Starting server with Python..."
  open_browser &
  python -m http.server 8000
elif command -v node &> /dev/null; then
  echo "Starting server with Node.js..."
  open_browser &
  npx --yes serve -l 8000 .
else
  echo "Neither Python nor Node.js was found on this computer."
  echo ""
  echo "To use OCR, install Python from https://www.python.org/downloads/"
  echo "then run this script again (you may need to: chmod +x start-server.sh)."
  echo ""
  echo "Everything else in the toolkit still works fine without this - only"
  echo "OCR needs a local server, due to a browser security restriction on"
  echo "files opened directly from disk."
  echo ""
  read -p "Press Enter to exit..."
fi
