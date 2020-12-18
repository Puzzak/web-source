<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $vars=array();
    switch($lang){
        case"ru":
            $vars[name]="Puzzak";
            $vars[hello]="Йо, я - Puzzak!";
            $vars[about]="<br>Я фотограф, программист и гик.<br>А ещё мечтатель, меломан, создатель, человек дождя и книжный червь.";
            $vars[code]="Исходный код этой страницы доступен на GitHub!";
            $vars[subscribe]="Подписывайся на мои страницы в соцсетях!";
            $vars[cv]="Резюме (СиВиха) тоже лежит на GitHub!";
            $vars[reload]="Чтобы перечитать, обнови страницу :)";
        break;
        case"uk":
            $vars[name]="Puzzak";
            $vars[hello]="Йо, я - Puzzak!";
            $vars[about]="<br>Я фотограф, програміст та гік.<br>А ще мрійник, меломан, творець, людина дощу і книжковий хробак.";
            $vars[code]="Вихідний код цієї сторінки доступний GitHub!";
            $vars[subscribe]="Підписуйся на мої сторінки в соцмережах!";
            $vars[cv]="Резюме (СіВішка) також доступна на GitHub!";
            $vars[reload]="Щоб перечитати, онови сторінку :)";
        break;
        default:
            $vars[name]="Puzzak";
            $vars[hello]="Yo, I'm Puzzak!";
            $vars[about]="<br>I am photographer, programmer and geek.<br>Also a dreamer, melomaniac, creator, man of rain and bookworm.";
            $vars[code]="Source code of this page is available on GitHub!";
            $vars[subscribe]="Consider subscribing to me on social media!";
            $vars[cv]="CV is also available on GitHub!";
            $vars[reload]="To read again, reload page :)";
        break;
    }
    $vars[]="";
?>
<html>
    <head>
        <meta charset=UTF-8>
        <title><?php echo $vars["name"];?></title>
        <link rel="shortcut icon" href="/assets/CGlogo.png">
        <link rel="icon" href="/assets/CGlogo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-control" content="public, max-age=31536000, immutable">
        <meta name="description" content="Puzzak`s home">
        <meta property="og:image" content="/assets/CG1k.png">
        <meta property="og:title" content="Puzzak">
        <meta property="og:site_name" content="Puzzak`s home">
        <meta property="og:url" content="https://HumanZ.space/">
        <meta property="og:description" content="Hi, I'm Puzzak)">
        <meta name="google-site-verification" content="7qoBczweaUOKPdTiKI-OugfGmtdGASd3uU2zcaxYzLk" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=NOPE"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-KRBDETK7H8');
        </script>
        <link rel="stylesheet" href="/assets/fonts/font.css">
        <link rel="stylesheet" href="/assets/styles/keyframes.css">
        <link rel="stylesheet" href="/assets/logos/logos.css">
        <link rel="stylesheet" href="/assets/styles/background.css">
        <link rel="stylesheet" href="/assets/styles/text.css">
        <link rel="stylesheet" href="/assets/styles/grid.css">
        <style>
            @keyframes loader{
                0%{content: "<?php echo $vars["code"];?>";}
                25%{content: "<?php echo $vars["code"];?>";}
                26%{content: "<?php echo $vars["subscribe"];?>";}
                50%{content: "<?php echo $vars["subscribe"];?>";}
                51%{content: "<?php echo $vars["cv"];?>";}
                75%{content: "<?php echo $vars["cv"];?>";}
                76%{content: "<?php echo $vars["reload"];?>";}
                100%{content: "<?php echo $vars["reload"];?>";}
            }
        </style>
    </head>
    <body>
        <div class="conce cease3"></div>
        <div class="conce cease2"></div>
        <div class="conce cease1"></div>
        <div class="conce cease0"></div>
        <div class="conce initor3"></div>
        <div class="conce initor2"></div>
        <div class="conce initor1"></div>
        <div class="conce initor0"></div>
        <div class="text loading"><span> </span></div>
        <div class="postr">
            <a class="text hello"><?php echo $vars["hello"];?></a>
            <a class="text about"><?php echo $vars["about"];?></a>
        </div>
        <div class="page">
            <a class="a" href="https://instagram.com/puzzaks"><img class="node instagram" src="/assets/logos/instagramc.png"></a>
            <a class="b" href="https://t.me/puzzaks"><img class="node telegram" src="/assets/logos/telegramc.png"></a>
            <a class="c" href="https://4pda.ru/forum/index.php?showuser=5985943"><img class="node pda" src="/assets/logos/4pdac.png"></a>
            <a class="d" href="https://blog.seeedstudio.com/blog/author/puzzak/"><img class="node seeed" src="/assets/logos/seeedc.png"></a>
            <a class="e" href="https://facebook.com/puzzaks"><img class="node facebook" src="/assets/logos/facebookc.png"></a>
            <a class="f" href="https://vk.com/puzzaks"><img class="node vkontakte" src="/assets/logos/vkc.png"></a>
            <a class="g" href="https://github.com/puzzak"><img class="node github" src="/assets/logos/githubc.png"></a>
            <a class="h" href="https://www.youtube.com/channel/UCzQLCulB0hDa5a-JJDXqEmQ"><img class="node youtube" src="/assets/logos/ytc.png"></a>
        </div>
    </body>
</html>