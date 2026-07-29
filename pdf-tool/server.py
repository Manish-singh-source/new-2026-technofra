"""PDF Toolkit local server — auto-shuts down when the browser tab closes."""
import http.server
import socketserver
import threading
import time
import sys
import os

PORT = 8000
IDLE_TIMEOUT = 30  # seconds without a keepalive before auto-shutdown

os.chdir(os.path.dirname(os.path.abspath(__file__)))

last_activity = time.time()


class Handler(http.server.SimpleHTTPRequestHandler):
    def log_message(self, fmt, *args):
        pass  # silence all request logging

    def do_GET(self):
        global last_activity
        last_activity = time.time()
        super().do_GET()

    def do_POST(self):
        global last_activity
        last_activity = time.time()
        if self.path == '/shutdown':
            self.send_response(200)
            self.end_headers()
            self.wfile.write(b'OK')
            # Shutdown after sending response
            threading.Thread(target=lambda: (time.sleep(0.5), os._exit(0)), daemon=True).start()
        elif self.path == '/keepalive':
            self.send_response(200)
            self.end_headers()
            self.wfile.write(b'OK')
        else:
            self.send_response(404)
            self.end_headers()


def watchdog():
    """Shuts down the server if no activity for IDLE_TIMEOUT seconds."""
    while True:
        time.sleep(10)
        if time.time() - last_activity > IDLE_TIMEOUT:
            os._exit(0)


if __name__ == '__main__':
    threading.Thread(target=watchdog, daemon=True).start()
    with socketserver.TCPServer(('', PORT), Handler) as httpd:
        try:
            httpd.serve_forever()
        except KeyboardInterrupt:
            pass
