#!/usr/local/bin/python
import sys, os

# Add a custom Python path.
sys.path.insert(0, "/home/demo35/.local/lib/")

# Set the DJANGO_SETTINGS_MODULE environment variable.
os.environ['DJANGO_SETTINGS_MODULE'] = "settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="prefork", daemonize="false")
