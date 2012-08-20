<?php
header('Content-type: application/x-web-app-manifest+json');
?>{
  "version": "1.0",
  "name": "Martin's FirefoxOS App",
  "launch_path": "/b2gapp/",
  "description": "A demo application to show how a FirefoxOS/B2G app can be distributed!",
  "icons": {
    "128": "/b2gapp/img/icon-128.png"
  },
  "developer": {
    "name": "Martin de Keijzer",
    "url": "http://www.martindekeijzer.nl"
  },
  "installs_allowed_from": ["*"],
  "orientation": "portrait,landscape-secondary",
  "fullscreen": "true"
}
