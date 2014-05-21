# Requirements

There are some requirements to installing and using this plugin:

    Linux server
    root access
    cPanel (ofcourse)
    Apache with Su-exec

# Very Important (Avoid 404)

You have to enable wordpress addon first from within WHM by going to:

cPanel »Install cPAddons Site Software

### cPanel plugin: Installer for WordPress

cPanel is a software package that is used to configure and maintain Linux webservers. It’s a really nice package, with lots of integration of services and accounts. I use it at my workplace and am quite satisfied with it.

## Installation

At the cPanel website you can generate the plugin file easily, but it’s also included in my zipfile.
This wordpress.panelplugin file can be placed in /usr/local/cpanel/whostmgr/docroot/cgi/wordpress.

This file can be installed with these commands at the rootshell:

	mkdir -p /usr/local/cpanel/base/frontend/x3/wordpress
	mkdir -p /usr/local/cpanel/whostmgr/docroot/cgi/wordpress

	git clone git@github.com:accelip/cPanel-Wordpress.git

	cd cPanel-Wordpress/cpanel-wordpress/usr/local/cpanel/base/frontend/x3/

	scp -r wordpress/* root@<ip_address>:/usr/local/cpanel/base/frontend/x3/wordpress 

	cd cPanel-Wordpress/cpanel-wordpress/usr/local/cpanel/whostmgr/docroot/cgi/
	 
	scp -r wordpress/* root@<ip_address>:/usr/local/cpanel/whostmgr/docroot/cgi/wordpress 
	 
	On the cPanel Server:

	cp /usr/local/cpanel/whostmgr/docroot/cgi/wordpress/wordpress.cpanelplugin /usr/local/cpanel/bin/

	cd /usr/local/cpanel/bin/

	./register_cpanelplugin wordpress.cpanelplugin

	To uninstall:
	cd /usr/local/cpanel/bin/

	./unregister_cpanelplugin wordpress.cpanelplugin


The real plugin, which does the work can then be placed in /usr/local/cpanel/base/frontend/x3/wordpress/.
Note the “x3″ in the path. If you’re using a different theme, make sure you place it in the right directory.
