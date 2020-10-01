#!/bin/sh
export PATH=/sbin:/bin:/usr/sbin:/usr/bin:/usr/local/sbin:/usr/local/bin
docker run -i --rm -v $(pwd):/code -w /code php:7-cli-alpine php "$@"
