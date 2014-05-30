<!doctype html>
<meta charset="utf-8">
<title>jwd.me</title>
<style>
body {
    margin: 20px auto;
    padding: 20px;
    width: 500px;
}

p {
    text-align: center;
    margin-bottom: 75px;
}
</style>
<p><img src="http://static.jwd.me/jwd.me.logo.png" alt="jwd.me logo" title="jwd.me logo"></p>
<p>jwd.me is the personal <a href="">Dokku</a> enviornment of Jared De Blander</p>
<p style="text-align: justify;">This page itself is a simple dokku app that can be <a href="https://github.com/jwdme/www">found on GitHub</a>. A variety of other public dokku containers that run on jwd.me can be found over on the <a href="https://github.com/jwdme">org page</a> at GitHub.</p>
<p><a href="mailto:jared@deblander.org">jared@deblander.org</a></p>
<pre>
<?php

passthru('free -h');
echo "\n\n";
passthru('df -h');
