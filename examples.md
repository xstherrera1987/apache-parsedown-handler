# Examples


## code
```ruby
# NOTE: Ruby code
require 'redcarpet'
markdown = Redcarpet.new("Hello World!")
puts markdown.to_html
```

```javascript
/* NOTE: javascript code */
var gulp = require('gulp');
var myth = require('gulp-myth');

gulp.task('default', function () {
    return gulp.src('src/app.css')
        .pipe(myth())
        .pipe(gulp.dest('dist'));
});
```

a sentence with `code` embedded within
a sentence with <kbd>Key</kbd> shortcuts

## tables
First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell
Content Cell  | Content Cell

## lists with markup
* __bold item__ [link](http://www.google.com)
    * sub item
* _italic item_ 
    * sub item
