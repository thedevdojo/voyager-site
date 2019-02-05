#!/bin/sh

set -e

git init
git config user.name "${GITHUB_ACTOR}"
git config user.email "${GITHUB_ACTOR}@users.noreply.github.com"

git subtree push --prefix build_production origin gh-pages