<!DOCTYPE html><html lang='en'><head><title>Untitled</title><meta content="noarchive" name="robots" />
    <link	href='/~Config/index-style/icons/root.ico' rel='shortcut icon' type='image/x-icon'/>
    <script src="//code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="></script>
    <script	src= '//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.3/less.min.js' defer></script>
    <script	src= '/~Config/index-style/index-style.js' defer></script>
    <link	href='/~Config/index-style/style.less?' rel='stylesheet/less' data-dump-line-numbers='all''>
</head><body><? $do=''; if(isset($_GET['foot'])){ $do='foot'; }else{ $do='head'; } switch($do){ case 'head': ?>
    <div><div id="command"><a href="/" class="root">Root</a>
        <a href="../" class="parent">Up</a><a href="" class="refresh">Refresh</a></div>
    <div id="files"><h2>Location: <span id="folder"></span></h2>
<? break; case 'foot': ?></div><div title="Based on DavePerrett.com styling" id="footer">
    <a href="http://github.com/intellilogic/apache_directory_style">
        Intellilogic’s Apache Directory Style</a></div></div><? break; } ?></body></html>