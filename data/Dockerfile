FROM centos:7

MAINTAINER "Claudio Kressibucher" "ckressibucher@graphicworks.ch"

# create a user to run php
RUN useradd --no-create-home --uid 1000 phprunner

# use it with something like:
# docker run -v ($pwd):/var/www --name data /bin/sh -c 'chown -R phprunner.phprunner'
