Style and enhance the functionality of the Apache directory view!  This adds HTML via PHP, styling with CSS (or LESS) and functionality with JS/ECMA (and jQuery).  Currently features enable full row highlighting and clicking.  Description row is enabled but hidden via CSS, it’s used to get the HTML Titles of files via Apache ‘ScanHTMLTitles’ feature; mouse over HTML file in the directory to see its title.  Simply adjust your httpd.conf to reflect the following:

DocumentRoot "E:"
<Directory "E:">
	Require all granted
	AllowOverride All
	Order allow,deny
	Allow from all
	<IfModule mod_autoindex.c>
		Options Indexes FollowSymLinks
		IndexOptions FancyIndexing
		IndexOptions VersionSort
		IndexOptions FoldersFirst
		IndexOptions IgnoreCase
		IndexOrderDefault Descending Name
		IndexOptions HTMLTable
		IndexOptions ScanHTMLTitles
		IndexOptions SuppressHTMLPreamble
		IndexOptions IconsAreLinks
		HeaderName /~Config/index-style/index-style.php?head
		ReadmeName /~Config/index-style/index-style.php?foot
		IndexIgnore $RECYCLE.BIN "System Volume Information" ~* 一*
	</ifModule>
</Directory>
#Alias /icons/ E:/~Config/index-style/icons/
