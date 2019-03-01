# wp-Casper

___

![](screenshot.png)

____

Take a look at the latest default theme for [Ghost](http://github.com/tryghost/ghost/), Casper.

This theme is the _WordPress_ version of __Casper__ by Ghost,  __wp-Casper__.

> The theme is no longer supported

# Post Meta - SEO

SEO post meta:    
+ mm_seo_desc
+ mm_seo_keywords
+ mm_seo_title

The reading time to be set by user with post-meta tag:
+ mm_reading_time

> To Do: Set the reading time to automatic

# Classes

### Tables
As well as the normal tables the theme offers some variations with classes:
+ table-bordered
+ table-striped
+ table-condensed

### Full page images
Full page images are achieved with the following markdown `#full`

```markdown
[img](some/image/file.jpg#full)
```

### Other Images

There are two other image classes:

+ img-framed
+ img-circle

# Floating Header

The floating header is set to use a logo image or site title but not both. You can use both but results will be crowded header

# Prism
Prism is an alternative code to Google code. The theme has a copy of the js and css files in the theme. Call using

    <pre><code class="langauge-css">
    header {
        font-size: 2.3rem;
        color: #333333;
        margin-top: .4rem;
    }
    </code></pre>


Change the css for the required code type.


# Notes - for the future
If looking to make a general theme the _author portfolio_ needs attention, ie need to make the _tabbed portfolio available_ to multi-authors. Images are called from _howardlucas.io_ so images are pretty flexible but the `alt-img` will have to be sorted.

### Menu Icons

Will need to make the _menu icons_ available from `admin area stylesheet`.

    .nav-menu ul li.pic-1,
    .nav-menu ul li.pic-2 {
    padding-left: 34px;
    background-repeat: no-repeat;
    background-size: 25px 25px;
    background-position: 0 0;
    }

    .pic-1 {
    background-image: url(path to image);
    }
    .pic-2 { ....etc.

## Category picture in Related Posts
The category picture needs looking at when used as background image. At the moment using the _site header background image_.

# Copyright & License

Copyright (c) 2009-2018 how59.com - Released under the [MIT license](LICENSE).
