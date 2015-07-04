# Apache Parsedown Handler

Apache PHP handler that renders all Markdown files to HTML when browsing with a web browser.  It uses [Parsedown](https://github.com/erusev/parsedown) library for parsing and is based on [markdown-handler](https://github.com/sminnee/markdown-handler).  Also uses [github-markdown-css](https://github.com/sindresorhus/github-markdown-css) for styling and [highlight.js](https://github.com/isagalaev/highlight.js) for code syntax highlighting.

## Installation
1. Copy __apache-parsedown-handler__ directory into the site's DocumentRoot (_default setting_)
    * otherwise update the `basePath` setting in settings.php and the path to __ParsedownHandler.php__ in step 2
        * the setting is `$ParsedownHandler->basePath`
        * the apache config line is `Action markdown /apache-parsedown-handler/libs/ParsedownHandler.php`
2. add apache handler settings
    * Copy __apache-parsedown-handler/sample-htaccess__ to the site's DocumentRoot
    * otherwise update the main apache configuration (__httpd.conf__) file with the handler settings

Now visit a .md file on your webserver; you should see it as properly styled HTML.

## FAQ

### Internal Server Error
This could be almost anything, so check the apache error log for more info.

* __"Invalid command 'Action', perhaps misspelled or defined by a module not included in the server configuration"__
Apache from HomeBrew doesn't enable this by default.  Uncomment this line in __httpd.conf__ if it's commented:
    
    `LoadModule actions_module libexec/mod_actions.so`

## TODO
+ do language-detection and syntax-highlighting server-side (eg: [Pygments](http://pygments.org/))
    + NOTE: _github-markdown-css_ already includes color-classes for use with Pygments style highlighting
