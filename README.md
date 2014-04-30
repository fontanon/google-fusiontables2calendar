Google Fusion Tables 2 iCAL generator:
======================================

What is this?
-------------

An <a href="http://www.ietf.org/rfc/rfc2445.txt">iCAL format .ics</a> generator for <a href="http://www.google.com/drive/apps.html#fusiontables">Google Fusion Tables</a> that can be run as a webservice.

Example
-------

* A Google Fusion Table with <a href="https://www.google.com/fusiontables/DataSource?docid=17GCms3EGtv6GIUoWuDkwGFGosQJ_1da7eRgydAVW">my agenda</a>.
* The resulting <a href="http://fonta-calendar.heroku.com">ICS calendar with my agenda</a>.

How to use it?
--------------

* Install <a href="https://getcomposer.org/">composer</a> and download dependencies running composer install.
* Fill the config.php file with your configuration.
* Deploy on a web server.
* Enjoy.

Requirements
------------

* A Google Fusion Table *shared as visible* for everybody.
* A Google Public API Access Key. Further info at <a href="https://console.developers.google.com">Google Developers</a>

Notes
-----

If you're adding this calendar to Google Calendar via "Add calendar by URL", please notice Google will update it every 24h. Further info at <a href="https://productforums.google.com/forum/#!topic/calendar/wNJy-nWeul0">Google Forums</a>.
