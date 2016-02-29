Application config
===========

This directory contains configuration files for the php app.
To allow to "find" its files, the nginx configuration sets
a environment variable `CONFIG_DIR` which can be accessed
from the php app using `getenv('CONFIG_DIR')`.


