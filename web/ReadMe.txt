Install application "XAMPP 8.0.7". After its launch start "Apache Web Server" and "MySQL Database" services.

For simple running of the web application by typing "//localhost/mom" into web browser configure server
(https://stackoverflow.com/questions/18902887/how-to-configuring-a-xampp-web-server-for-different-root-directory):
1. Go to /Applications/xampp/apache/conf/httpd.conf or open it from application "Config"
2. Open "httpd.conf"
3. Find tag : DocumentRoot
4. Add new "Directory" tag with "path to the web folder of this project (i.e. where index.php is located)"
    <Directory "/Users/jurajnozar/Projects/MoM/SourceCode/web">
        Options Indexes FollowSymLinks ExecCGI Includes
        AllowOverride All
        Require all granted
    </Directory>
5. Find tag <IfModule alias_module>
6. Add alias: Alias "/mom" "/Users/jurajnozar/Projects/Fimple/SourceCode/web"
6. Restart Apache

For localization is used "gettext" in php: https://phrase.com/blog/posts/php-how-to-translate-php-apps/
Command for compiling .po files to .mo "/Applications/XAMPP/xamppfiles/bin/msgfmt messages.po"
