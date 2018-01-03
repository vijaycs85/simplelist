## Simple List

[![Build Status](https://travis-ci.org/vijaycs85/simplelist.svg?branch=8.x-1.x)](https://travis-ci.org/vijaycs85/simplelist)

### Overview

Simplelist module provides set of configurations to create simple list page like [drupal.org FAQ](https://www.drupal.org/about/faq) page.

### How does it work?

This module provides snippet **content type** with snippet type **taxonomy vocabulary** to create content in different categories. Using [entityqueue](https://www.drupal.org/project/entityqueue) module to list/order snippets and [views](http://cgit.drupalcode.org/drupal/tree/core/modules/views) module to expose page. All these content can be easily updated to work with different use-cases.

### Install

1. Install module usual.
2. Create new `snippet` nodes.
3. Add nodes to faq node queue.
4. visit `/faq` page to see questions and answers.

### Create new page

Additional pages can be created by:
1. Create new term.
2. Create snippet nodes with new term
3. Create new node queue and add new nodes.
4. copying both page and attachment displays.
5. Update term and node queue details in both displays.

#### Screenshots
![Simplelist](https://user-images.githubusercontent.com/1220029/34498438-765aeeea-eff9-11e7-896e-7ebc075a354d.gif)


## Contributors
Feel free to open an [issue](https://github.com/vijaycs85/simplelist/issues/new) or [pull request](https://github.com/vijaycs85/simplelist/pulls) to improve, add new features and bug fixes.

## License
This project is distributed under the terms of the [GNU General Public License version 2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
