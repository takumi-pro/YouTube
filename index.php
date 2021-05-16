<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
</head>

<body>
    <form action="">
        <input class="search" type="text" name="name">
        <button class="search_btn">検索</button>
    </form>

    <div class="info">

    </div>
</body>

<script src="https://apis.google.com/js/client.js" type="text/javascript"></script>
<script>
const input = document.querySelector('.search');
const btn = document.querySelector('.search_btn');
const info = document.querySelector('.info');

const key = '?key=AIzaSyAEd1TOfXFjpao-MoligM0MwdbPMyouIrQ';
let url = 'https://www.googleapis.com/youtube/v3/search';
let maxResults = '&maxResults=10';
url += key + '&part=snippet' + maxResults;
// url += '?part=snippet';

window.onload = function() {
    btn.onclick = fetchData;
}

function fetchData(e) {
    e.preventDefault();
    let val = input.value;
    url += '&q=' + val;

    fetch(url, {
        mode: 'cors'
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        createInfo(json);
    })
}

function createInfo(json) {
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