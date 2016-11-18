#!/bin/sh

find . -name "*.php" -maxdepth 1 -exec ./vendor/bin/phpmd {} xml cleancode,codesize,design,naming,unusedcode \;
