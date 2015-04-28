# Apache Parsedown Handler

Adds an Apache handler that renders all Markdown files to HTML when browsing with a web browser.  It uses [Parsedown](https://github.com/erusev/parsedown) library for parsing and is based on [markdown-handler](https://github.com/sminnee/markdown-handler).

## Installation
* Copy .htaccess to your root, or update your httpd.conf file with its contents, if you prefer.
* Copy `apache-parsedown-handler` into your webroot.

Now visit a .md file on your webserver; you should see it as properly styled HTML.

## TODO
* add Parsedown library as a submodule
* update base HTML for rendering (HTML5 + bootstrap?)
* update or link with `<code>` syntax-highlighting CSS
