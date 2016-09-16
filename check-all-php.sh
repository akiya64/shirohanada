#!/bin/sh

find . -name "*.php" -maxdepth 2 -print -exec ./phpmd/bin/phpmd {} xml cleancode,codesize,design,naming,unusedcode \;
