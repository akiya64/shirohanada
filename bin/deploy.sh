#!/usr/bin/env bash

set -e

if [[ "false" != "$TRAVIS_PULL_REQUEST" ]]; then
	echo "Not deploying pull requests."
	exit
fi

if [[ "master" != "$TRAVIS_BRANCH" ]]; then
	echo "Not on the 'master' branch."
	exit
fi

git checkout -b release

git rm stylus -r
git rm bin -r
git rm .travis.yml
git rm README.md
git rm gulpfile.js
git rm package.json
git rm style.css.map

git commit -m "Update from travis $TRAVIS_COMMIT"

git push "https://$GH_TOKEN@github.com/${TRAVIS_REPO_SLUG}.git" release
