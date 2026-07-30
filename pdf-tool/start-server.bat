@echo off
setlocal
cd /d "%~dp0"

echo ============================================
echo   PDF Toolkit - Local Server
echo ============================================
echo.
echo The server will stop automatically when you close the browser tab.
echo You can also close this window manually at any time.
echo.

where python >nul 2>nul
if %errorlevel%==0 (
    echo Starting server with Python...
    start "" http://localhost:8000/index.html
    python server.py
    goto :eof
)

where py >nul 2>nul
if %errorlevel%==0 (
    echo Starting server with Python...
    start "" http://localhost:8000/index.html
    py server.py
    goto :eof
)

where node >nul 2>nul
if %errorlevel%==0 (
    echo Starting server with Node.js...
    start "" http://localhost:8000/index.html
    npx --yes serve -l 8000 .
    goto :eof
)

echo Neither Python nor Node.js was found on this computer.
echo.
echo To use OCR, install Python from https://www.python.org/downloads/
echo (tick "Add python.exe to PATH" during setup), then double-click this
echo file again.
echo.
pause
