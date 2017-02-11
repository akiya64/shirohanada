#!/bin/sh

find . components/ -name "*.php" -maxdepth 1 -exec ./vendor/bin/phpcbf -p -s -v {} --standard=wordpress \;
find . components/ -name "*.css" -maxdepth 1 -exec ./vendor/bin/phpcbf -p -s -v {} --standard=wordpress \;
find . components/ -name "*.php" -maxdepth 1 -exec ./vendor/bin/phpcs -p -s -v {} --standard=wordpress \;
find . components/ -name "*.css" -maxdepth 1 -exec ./vendor/bin/phpcs -p -s -v {} --standard=wordpress \;
