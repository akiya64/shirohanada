#!/bin/sh

find . components/ -name "*.php" -maxdepth 1 -exec ./phpcs/bin/phpcbf -p -s -v {} --standard=wordpress \;
find . components/ -name "*.css" -maxdepth 1 -exec ./phpcs/bin/phpcbf -p -s -v {} --standard=wordpress \;
find . components/ -name "*.php" -maxdepth 1 -exec ./phpcs/bin/phpcs -p -s -v {} --standard=wordpress \;
find . components/ -name "*.css" -maxdepth 1 -exec ./phpcs/bin/phpcs -p -s -v {} --standard=wordpress \;
