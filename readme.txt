## About

I’m a huge fan of UnderStrap, Bootstrap, and Sass. So I took the UnderStrap starter theme and built my own theme on top of it. I use the name WP Rig, because the config files make it easy to test and deploy custom themes all from this one Master WP Rig Theme.

## License

Master WP Rig WordPress Theme, Copyright 2013-2018 Holger Koenemann
Master WP Rig is distributed under the terms of the GNU GPL version 2

http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

## Changelog

## Commits on Feb 25, 2021

Author: Ben Wille<br>
**fix[gulp]: Fixed gulp tasks**<br>

- Updated purgecss, clean-dist, compile and bundle tasks

1 file changed, 39 insertions(+), 12 deletions(-)

## Commits on Feb 24, 2021

Author: Ben Wille<br>
**chore: created changelog based commits**<br>

- I removed the commits from the original created of understrap.

1 file changed, 134 insertions(+), 642 deletions(-)

## Commits on Feb 24, 2021

Author: Ben Wille<br>
**Updated gitignore to track folders in dev/optional**<br>

- 49 files changed, 2387 insertions(+), 6 deletions(-)

## Commits on Feb 24, 2021

Author: Ben Wille<br>
**Moved all folder files to optional folder**<br>

- 30 files changed, 1696 deletions(-)

## Commits on Feb 22, 2021

Author: Ben Wille<br>
**add PHP task and PHPCS options**<br>

- 4 files changed, 46 insertions(+), 58 deletions(-)

## Commits on Feb 21, 2021

Author: Ben Wille<br>
**Fix gitignore and removing old production files from theme folder.**<br>

- 207 files changed, 30375 deletions(-)

## Commits on Feb 21, 2021

Author: Ben Wille<br>
**Updating gitignore and updating pacakges**<br>

- 4 files changed, 2544 insertions(+), 1714 deletions(-)

## Commits on Feb 19, 2021

Author: Ben Wille<br>
**moved files to dev folder, updated gulpfile**<br>

- 223 files changed, 30447 insertions(+), 51 deletions(-)

## Commits on Dec 11, 2020

Author: Ben Wille<br>
**Adding Must Use plugins**<br>

- 4 files changed, 4077 insertions(+)

## Commits on May 29, 2020

Author: Ben Wille<br>
**Merge commit '916390a30fe0340b28c08f3c8d63026734e8a9ec'**<br>

- - commit '916390a30fe0340b28c08f3c8d63026734e8a9ec':
    Bump acorn from 5.7.3 to 5.7.4

# Conflicts:

# package-lock.json

## Commits on May 29, 2020

Author: Ben Wille<br>
**added Remove Code package for dev code added master admin editor styles**<br>

- 6 files changed, 575 insertions(+), 51 deletions(-)

## Commits on May 23, 2020

Author: dependabot[bot]<br>
**Bump acorn from 5.7.3 to 5.7.4**<br>

- Bumps [acorn](https://github.com/acornjs/acorn) from 5.7.3 to 5.7.4.
- [Release notes](https://github.com/acornjs/acorn/releases)
- [Commits](https://github.com/acornjs/acorn/compare/5.7.3...5.7.4)

Signed-off-by: dependabot[bot] <support@github.com>

1 file changed, 369 insertions(+), 52 deletions(-)

## Commits on May 23, 2020

Author: Ben Wille<br>
**Fixed ${paths}, added images task, added custom post type file options**<br>

- 7 files changed, 249 insertions(+), 150 deletions(-)

## Commits on Mar 16, 2020

Author: Ben Wille<br>
**Added purgeCSS plugin and new variables**<br>

- 3 files changed, 25 insertions(+), 1 deletion(-)

## Commits on Mar 09, 2020

Author: Ben Wille<br>
**Add task to clean out empty folders (node_modules and sass) after compiled**<br>

- 1 file changed, 6 insertions(+), 1 deletion(-)

## Commits on Mar 03, 2020

Author: Ben Wille<br>
**Updating Author info Adding fonts task**<br>

- 2 files changed, 9 insertions(+), 11 deletions(-)

## Commits on Feb 18, 2020

Author: Ben Wille<br>
**Adding Header Scripts to customizer**<br>

- 2 files changed, 44 insertions(+)

## Commits on Jan 29, 2020

Author: Ben Wille<br>
**Adding support dashboard widget functionality Adding option to remove sidebar menu and admin notices**<br>

- 3 files changed, 82 insertions(+), 54 deletions(-)

## Commits on Jan 23, 2020

Author: Ben Wille<br>
**Adding wp-pot and zip dependencies**<br>

- 3 files changed, 15 insertions(+), 2 deletions(-)

## Commits on Jan 09, 2020

Author: Ben Wille<br>
**Updating NPM security files.**<br>

- 118 files changed, 341 insertions(+), 139 deletions(-)

## Commits on Jan 09, 2020

Author: Ben Wille<br>
**First Commit**<br>

- 291 files changed, 75074 insertions(+)


## Basic Features

- Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
- Comes with Bootstrap (v4) Sass source files and additional .scss files. Nicely sorted and ready to add your own variables and customize the Bootstrap variables.
- Uses a single minified CSS file for all the basic stuff.
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) integration (v4.7.0)
- Jetpack ready.
- WooCommerce support.
- Contact Form 7 support.
- Translation ready.

## Starter Theme + HTML Framework = WordPress Theme Framework

The UnderStrap theme is a great starting point to develop a WordPress theme. UnderStrap is based of Underscores (\_s) and comes complete with all the page templates, global templates, and sidebar templates you could want.

Bootstrap adds a solid and responsive layout framework that is well documented and widely used.

## Confused by All the CSS and Sass Files?

Some basics about the Sass and CSS files that come with UnderStrap:

- The theme itself uses the `/style.css`file only to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/theme.css` and its minified little brother `/css/theme.min.css` file(s) provides all styles. It is composed of five different SCSS sets and one variable file at `/sass/theme.scss`:

```@import "theme/theme_variables";  // 1. Add your variables into this file. Also add variables to overwrite Bootstrap or UnderStrap variables here
@import "../src/bootstrap-sass/assets/stylesheets/bootstrap";  // 2. All the Bootstrap stuff - Don´t edit this!
@import "understrap/understrap"; // 3. Some basic WordPress stylings and needed styles to combine Boostrap and Underscores
@import "../src/fontawesome/scss/font-awesome"; // 4. Font Awesome Icon styles
// Any additional imported files //
@import "theme/theme";  // 5. Add your styles into this file
```

- Don’t edit the number 2-4 files/filesets listed above or you won’t be able to update Understrap without overwriting your own work!
- Your design goes into: `/sass/theme`.
  - Add your styles to the `/sass/theme/_theme.scss` file
  - And your variables to the `/sass/theme/_theme_variables.scss`
  - Or add other .scss files into it and `@import` it into `/sass/theme/_theme.scss`.

## Installation

There are two ways to install Master WP Rig. We'll look at three of them: (1) classic install by uploading Master WP Rig to a WordPress install or (2) using npm.

### Classic install

- Download the master-wp-start-theme folder from GitHub or from [https://github.com/benwille/Master-WP-Starter-Template](https://github.com/benwille/Master-WP-Starter-Templatehttps://understrap.com)
- IMPORTANT: If you download it from GitHub make sure you rename the "Master-WP-Starter-Template.zip" file just to "master.zip" or you might have problems using child themes!
- Upload it into your WordPress installation theme subfolder: `/wp-content/themes/`
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the Master WP Rig theme

### npm install

- Open your terminal
- Change to the directory where you want to add UnderStrap
- Type `npm install master-wp-rig`

## Developing With npm, Gulp and SASS and [Browser Sync][1]

### Installing Dependencies

- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your Master WP Rig copy
- Run: `$ npm install`

### Running

To work with and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:

```javascript
{
    "browserSyncOptions" : {
        "proxy": "localhost/theme_test/", // <----- CHANGE HERE
        "notify": false
    },
    ...
};
```

- then run: `$ gulp watch-bs`

## Why aren't there files in the root folder

For a fresh upload of the theme, all files can be found in the `dev/` folder. Do not move any files from `dev/` to the root folder. Running `$ gulp php` or `$ gulp compile` will compile all the files and folders and move them to the correct place in the root folder.

Inside `dev/optional` you'll find several extra files and folders that you can move out of the optional folder into the dev folder. In order to remove any theme bloat, any files you don't use and aren't required can be moved back into the optional folder.

## How to Use the Built-In Widget Slider

The front-page slider is widget driven. Simply add more than one widget to widget position “Hero”.

- Click on Appearance → Widgets.
- Add two, or more, widgets of any kind to widget area “Hero”.
- That’s it.

## RTL styles?

Add a new file to the themes root folder called rtl.css. Add all alignments to this file according to this description:
https://codex.wordpress.org/Right_to_Left_Language_Support

## Page Templates

Master WP Rig includes several different page template files: (1) blank template, (2) empty template, and (3) full width template.

### Blank Template

The `blank.php` template is useful when working with various page builders and can be used as a starting blank canvas.

### Empty Template

The `empty.php` template displays a header and a footer only. A good starting point for landing pages.

### Full Width Template

The `fullwidthpage.php` template has full width layout without a sidebar.

## Footnotes

[1] Visit [http://browsersync.io](http://browsersync.io) for more information on Browser Sync

# Licenses & Credits

- UnderStrap: https://understrap.com
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
  and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
- Bootstrap Gallery Script based on Roots Sage Gallery: https://github.com/roots/sage/blob/5b9786b8ceecfe717db55666efe5bcf0c9e1801c/lib/gallery.php

[![Analytics](https://ga-beacon.appspot.com/UA-139292-31/chromeskel_a/readme)](https://github.com/igrigorik/ga-beacon)
