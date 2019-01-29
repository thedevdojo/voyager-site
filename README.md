# LaravelVoyager.com

This is the repo for the new LaravelVoyager.com website. This site has been rebuilt using the [JigSaw Static site generator](https://jigsaw.tighten.co/)

To get started with a local copy, simply clone the repo and then run:

```
composer install
```

Next, you'll need to install the NPM modules by running:

```
npm install
```

Next, you will need to build a static local copy by running the following command:

```
./vendor/bin/jigsaw build
```

Then, you can serve it up by running:

```
npm run watch
```

The hosted version of the site will serve up at `http://localhost:3000`.

---

## Send In Your PR

You'll want to checkout a new branch and add your changes.

Then, you'll want to run the following npm command to compile the site for production:

```
npm run production
```

Next, make sure to do a new production build by running:

```
./vendor/bin/jigsaw build production
```

Then, push your branch changes and open a PR to merge into `master`.

## Admins -- How To Deploy

After merging the PR we will want to pull the latest version of master:

```
git pull origin master
```

Create a subtree {newBranchName} from the `build_production` folder:

```
git subtree push --prefix build_production origin {newBranchName}
```

And merge the `{newBranchName}` into the `gh-pages` branch, give it a few seconds and those changes will be live.

Happy Sailing ;)
