# Apache Parsedown Handler

Adds an Apache handler that renders all Markdown files to HTML when browsing with a web browser.  It uses [Parsedown](https://github.com/erusev/parsedown) library for parsing and is based on [markdown-handler](https://github.com/sminnee/markdown-handler).  Also uses [github-markdown-css](https://github.com/sindresorhus/github-markdown-css) for styling and [highlight.js](https://github.com/isagalaev/highlight.js) for code syntax highlighting.

## Installation
* Copy .htaccess to your root, or update your httpd.conf file with its contents, if you prefer.
* Copy `apache-parsedown-handler` into your webroot.

Now visit a .md file on your webserver; you should see it as properly styled HTML.

## TODO
* do language-detection and syntax-highlighting server-side (eg: [Pygments](http://pygments.org/))
    * NOTE: _github-markdown-css_ already includes color-classes for use with Pygments style highlighting

