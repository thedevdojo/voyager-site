# LaravelVoyager.com

This is the repo for the LaravelVoyager.com website. The LaravelVoyager.com has been rebuilt using the (https://jigsaw.tighten.co/)[JigSaw Static site generator]

To get started with a local copy, simply clone the repo and then run:

```
composer install
```

Next, you'll need to install the NPM modules by running:

```
npm install
```

Next, you can serve it up by running:

```
npm run watch
```

The hosted version of the site will serve up at `http://localhost:3000`.

If you are adding any new files you may need to `rebuild` the site by running the following command:

```
./vendor/bin/jigsaw build
```

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
