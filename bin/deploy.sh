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

git config remote.origin.fetch "+refs/heads/*:refs/remotes/origin/*"
git fetch

git checkout -b pre-release remotes/origin/master

git rm -rf stylus
git rm -rf bin
git rm -f .travis.yml
git rm -f README.md
git rm -f gulpfile.js
git rm -f package.json
git rm -f style.css.map
git rm -f fonts/icomoon.zip

git commit -m "prepare release"

git checkout -b release remotes/origin/release

git merge pre-release -m "Travis build release $TRAVIS_COMMIT"

git push "https://${GH_TOKEN}@${GH_REF}" release > /dev/null 2>&1
