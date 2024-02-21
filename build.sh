#!/bin/sh

# build main site
rm -rf public && hugo -F --minify

# send to server via rsync
rsync -e "ssh -p $(MATEUS2SSHPORT)" -uPvr public/* $(MATEUS2SSHCREDENTIALS)
