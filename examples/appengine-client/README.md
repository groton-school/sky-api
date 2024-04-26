# groton-school/sky-api.appengine Example

Simple Google App Engine app demonstrating how to configure access to SKY API.

## Setup

```sh
cd path/to/appengine-client
npm install
bin/setup.mjs
```

_But wait, why are we using `npm` (or whatever your Javascript dependency manager of choice is) for a PHP project? Because we have to do a bunch of setup in Google Cloud to get the app running, and [@battis/partly-gcloudy](https://github.com/battis/partly-gcloudy) makes that work much easier, and *it* is a JavaScript library._

## View

```sh
cd path/to/appengine-client
source .env
open $URL/me
```
