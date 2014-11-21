=== New Relic log splitter ===
Contributors: giacomozinetti
Donate link: https://giko.it/
Tags: newrelic, new, relic, split, log, admin, cron, performance, statistics
Requires at least: 3.0.1
Tested up to: 4.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Configures New Relic to split log data in admin, cron, and website.

== Description ==

If you are running [New Relic](https://newrelic.com/) on your webserver,
installing this plugin you will have 4 different log on your [NR dashboard](https://rpm.newrelic.com):

* *Appname*: Statistics about the whole website, the same that you had without this plugin
* *Appname* website: The public website
* *Appname* admin: Logs about the admin interface
* *Appname* cron: Performance of the cron scripts

Where *Appname* is the name of the app configured in the nr deamon.

== Installation ==

Just install the plugin and activate it!
It works also as **mu-plugin**
