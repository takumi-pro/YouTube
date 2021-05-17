<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./dist/app.css">
    <title>YouTube</title>
</head>

<body>
    <header class="l-header u-flex">
        <div class="l-header_iconlogo u-flex">
            <div class="l-header_icon c-icon">
                <i class="fas fa-bars"></i>
            </div>
            <div class="l-header_logo">
                <a class="l-header_logo_link" href="">
                    <img src="./img/MYTUBE.png" alt="YouTubeDataAPI_logo">
                </a>
            </div>
        </div>

        <div class="l-header_search u-flex">
            <div class="l-header_search_i">
                <form class="l-header_search_box u-flex" action="">
                    <div class="l-header_search_wrap">
                        <input class="l-header_search_input" placeholder="検索" type="text" name="name">
                    </div>
                    <button class="l-header_search_btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="l-header_voice c-icon_link">
                <a href="">
                    <i class="fas fa-microphone"></i>
                </a>
            </div>

        </div>

        <div class="l-header_icons u-flex">
            <div class="l-header_icon c-icon_link">
                <a href="">
                    <i class="fas fa-video"></i>
                </a>
            </div>
            <div class="l-header_icon c-icon_link">
                <a href="">
                    <i class="fas fa-th"></i>
                </a>
            </div>
            <div class="l-header_icon c-icon_link">
                <a href="">
                    <i class="fas fa-bell"></i>
                </a>
            </div>
            <div class="l-header_icon c-icon_link">
                <a href="">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </header>

    <div class="l-sidebar">
        <div class="l-sidebar_inner">
            <ul class="c-sidebar_lists">
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link is-active">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
                <li class="c-sidebar_list">
                    <a href="" class="c-sidebar_link">
                        <div class="c-icon_sidebar">
                            <i class="fas fa-home"></i>
                        </div>
                        <span class="c-sidebar_word">ホーム</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="l-content">
        <div class="l-content_inner">

            <div class="data-list">
                <div class="c-content_list">
                    <div class="c-content_thumbnail">
                        <a href="" class="c-thumbnail_link">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="c-content_description">
                        <a href="" class="c-avatar_link"></a>
                        <div class="c-description_media">
                            <h3 class="c-title"></h3>
                            <div class="c-metadata">
                                <span class="c-channel"></span>
                                <span class="c-datatime"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="./src/JS/app.js"></script>

</html>