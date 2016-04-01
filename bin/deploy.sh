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

git clone "https://${GH_REF}" release-temp
cd release-temp
git branch release remotes/origin/release
git checkout release

git merge "merge in travis $TRAVIS_COMMIT" master

git push "https://${GH_TOKEN}@${GH_REF}" release
