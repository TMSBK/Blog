<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick-1.8.0\slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick-1.8.0\slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <!-- Itt teszem be a header template-et -->
        <?php include 'Admin/headerTemplate.php'; ?>

        <div id="maincontent">
            <div class="autoplayMain">
                
                <?php 
                    /* Itt választom ki a mappában lévő utolsó hírt */
                    $directory = "News/";
                    $files = scandir ($directory);
                    $count = count($files);
                    $latestNews = $directory . $files[$count-2];
                    $2_News = $directory . $files[$count-3];
                    $3_News = $directory . $files[$count-4];
                    $4_News = $directory . $files[$count-5];
                    $5_News = $directory . $files[$count-6];
                    $6_News = $directory . $files[$count-7];
                    $7_News = $directory . $files[$count-8];
                    $8_News = $directory . $files[$count-9];
                    $9_News = $directory . $files[$count-10];
                    $10_News = $directory . $files[$count-11];
                    $11_News = $directory . $files[$count-12];
                    $12_News = $directory . $files[$count-13];

                    /* Itt az utolsó hírben megkeresem a képet */
                    preg_match_all( '@src="([^"]+)"@' , file_get_contents($latestNews), $match );
                    $src = array_pop($match);

                    /* Itt legenerálom a kezdőképernyőn az első csempét */
                    echo 

                   '<div class="upper">
                        <div class="under">
                            <div class="moreMain underButtonMain" onclick="window.location.href=\'' . $latestNews . '\'"><span class="moreShare">MORE</span></div>
                            <div class="shareMain underButtonMain"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="' . $src[0] . '">
                    </div>'
                ?>
                    
                <div class="upper">
                    <div class="under">
                        <div class="moreMain underButtonMain"><span class="moreShare">MORE</span></div>
                        <div class="shareMain underButtonMain"><span class="moreShare">SHARE</span></div>
                    </div>
                    <img src="Picz\test.png">
                </div>

                <div class="upper">
                    <div class="under">
                        <div class="moreMain underButtonMain"><span class="moreShare">MORE</span></div>
                        <div class="shareMain underButtonMain"><span class="moreShare">SHARE</span></div>
                    </div>
                    <img src="Picz\test.png">
                </div>

                <div class="upper">
                    <div class="under">
                        <div class="moreMain underButtonMain"><span class="moreShare">MORE</span></div>
                        <div class="shareMain underButtonMain"><span class="moreShare">SHARE</span></div>
                    </div>
                    <img src="Picz\test.png">
                </div>

            </div>
            <div id="flexContainer">
                <div class="autoplaySub flexItem">
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                    <div class="upper">
                        <div class="under">
                            <div class="moreSub underButtonSub"><span class="moreShare">MORE</span></div>
                            <div class="shareSub underButtonSub"><span class="moreShare">SHARE</span></div>
                        </div>
                        <img src="Picz\test.png">
                    </div>
                </div>
                <div class="menu flexItem">
                    <ul id="menuElements">
                        <li>NEWS</li>
                        <li>SHOP</li>
                        <li>ROSTER</li>
                        <li>SHOWS</li>
                        <li>ABOUT</li>
                    </ul>
                </div>
            </div>
        </div>
        <footer>
            <img id="sign" src="Picz\sign.png">
            <div id="infotab">
                <span class="moreShare">About</span>
                <span class="moreShare">Contact</span>
                <span class="moreShare">Press</span>
            </div>
        </footer>
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
        </script>
        <script src="slick-1.8.0\slick.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>