#! /bin/bash
# build main site
rm -rf public && hugo -F --minify

# send to hostinger server via rsync
rsync -e 'ssh -p 65002' -uPvr public/* u488462090@151.106.98.11:domains/mtsbrgsrbr.xyz/public_html
