## Simple List
Simplelist module provides set of configurations to create simple list page like drupal.org [FAQ](https://www.drupal.org/about/faq) page.

### How does it work?

This module provides snippet **content type** with snippet type **taxonomy vocabulary** to create content in different categories. Using [entityqueue]() module to list/order snippets and [views]() module to expose page. All these content can be easily updated to work with different use-cases.

### Install

1. Install module usual.
2. Create term (e.g. FAQ) under [snippet types]() taxonomy
3. Create new [snippet]() nodes
4. Update [view page display]() field with new term created in step 2.

### Create new page

Additional pages can be created by:
1. Create new term.
2. Create snippet nodes with new term
3. Create new node queue and add new nodes.
4. copying both page and attachment displays.
5. Update term and node queue details in both displays.

#### Screenshots
![Simplelist](https://user-images.githubusercontent.com/1220029/34498438-765aeeea-eff9-11e7-896e-7ebc075a354d.gif)
