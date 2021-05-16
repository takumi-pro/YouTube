<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/app.css">
    <title>YouTube</title>
</head>

<body>
    <header class="header">
        <form class="search_form" action="">
            <input class="search" type="text" name="name">
            <button class="search_btn">検索</button>
        </form>
    </header>

    <div class="info">

    </div>
</body>

<script>
const input = document.querySelector('.search');
const btn = document.querySelector('.search_btn');
const info = document.querySelector('.info');

const API_KEY = '&key=AIzaSyAEd1TOfXFjpao-MoligM0MwdbPMyouIrQ';
const baseUrl = 'https://www.googleapis.com/youtube/v3';
let maxResults = '&maxResults=10';

//検索URLの生成
let searchSnippet = '?part=snippet';
let searchUrl = baseUrl + '/search' + searchSnippet + maxResults + API_KEY;

//プレイリストの生成
let subscSnippet = '?part=snippet';
let playlistId = '&playlistId=PLBJsdIdy3xPtFcpakhCiybjNiMFpG0-BK';
let playlistUrl = baseUrl + '/playlistItems' + subscSnippet + playlistId + API_KEY;

window.onload = function() {
    btn.onclick = fetchData;

    fetch(playlistUrl, {
        mode: 'cors'
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        create(json);
    })
}

function fetchData(e) {
    e.preventDefault();

    let val = input.value;
    searchUrl += '&q=' + val;
    console.log(searchUrl);

    fetch(searchUrl, {
        mode: 'cors'
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        create(json);
    })
}

function create(json) {
    while (info.firstChild) {
        info.removeChild(info.firstChild);
    }

    for (let i = 0; i < json.items.length; i++) {
        const thumbnails = json.items[i].snippet.thumbnails;
        let img = document.createElement('img');
        img.src = thumbnails.default.url;

        info.appendChild(img);
    }
}
</script>

</html>