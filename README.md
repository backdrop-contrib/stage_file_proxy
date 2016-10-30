Stage File Proxy
================

Proxies files from production server so you don't have to transfer them manually.

Stage File Proxy saves you time and disk space by sending requests to your development environment's files directory to the production environment and making a copy of the production file in your development site. You should not need to enable this module in production.

Features
--------

When developing Drupal sites locally, you often face a choice between broken images and taking the time to copy a snapshot of the remote files directory, which might be several gigabytes large, depending on the site. Stage File Proxy lets you update the database of your local development instance without having to update your files directory. Stage File Proxy transfers each requested file just in time when it is requested. This is especially useful for large sites with huge numbers of files. If you only visit 2 pages and only need 10 remote files to serve those pages, Stage File Proxy will only transfer those 10 files. Stage File Proxy has an additional mode in which it can serve a 301 redirect to files on the server, so it's possible to see all your images without having a local files directory at all.

Simple install and configuration
--------------------------------

See INSTALL.txt (note that drush install hasn't been ported and Backdrop CMS maintains a separate version of drush)

Image Style support
-------------------

Stage File Proxy integrates with image styles to transfer the original image from the origin and then resize it locally.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

Maintainers
-----------

Maintainers of Drupal 7 version:

* Greg Knaddison (https://www.drupal.org/u/greggles)
* Rob Wilmshurst (https://www.drupal.org/u/robwilmshurst)

Ported to Backdrop CMS by Herb v/d Dool (https://github.com/herbdool).
