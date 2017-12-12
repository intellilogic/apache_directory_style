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
