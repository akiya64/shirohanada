#!/bin/sh

find . template-parts/ -name "*.php" -maxdepth 1 -exec ./vendor/bin/phpcbf -p -s -v -n {} --standard=wordpress \;
find . template-parts/ -name "*.css" -maxdepth 1 -exec ./vendor/bin/phpcbf -p -s -v -n {} --standard=wordpress \;
find . template-parts/ -name "*.php" -maxdepth 1 -exec ./vendor/bin/phpcs -p -s -v -n {} --standard=wordpress \;
find . template-parts/ -name "*.css" -maxdepth 1 -exec ./vendor/bin/phpcs -p -s -v -n {} --standard=wordpress \;
