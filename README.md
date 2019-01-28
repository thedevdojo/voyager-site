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

## Updating Production

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

After merged into the `master` branch the changes will be live.

Happy Sailing ;)
