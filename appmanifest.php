<?php
header('Content-type: application/x-web-app-manifest+json');
?>{
  "version": "1.0",
  "name": "FirefoxOS App",
  "description": "A demo application to show how a FirefoxOS/B2G app can be distributed!",
  "icons": {
    "16": "/img/icon-16.png",
    "48": "/img/icon-48.png",
    "128": "/img/icon-128.png"
  },
  "developer": {
    "name": "Martin de Keijzer",
    "url": "http://www.martindekeijzer.nl"
  },
  "installs_allowed_from": ["*"],
  "appcache_path": "/cache.manifest",
  "orientation": "portrait,landscape-secondary",
  "fullscreen": "true"
}