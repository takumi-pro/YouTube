const input = document.querySelector('.l-header_search_input');
const btn = document.querySelector('.l-header_search_btn');
const data = document.querySelector('.data-list');

const API_KEY = '&key=AIzaSyAEd1TOfXFjpao-MoligM0MwdbPMyouIrQ';
const baseUrl = 'https://www.googleapis.com/youtube/v3';
let maxResults = '&maxResults=5';

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
    while (data.firstChild) {
        data.removeChild(data.firstChild);
    }

    for (let i = 0; i < json.items.length; i++) {
        const thumbnails = json.items[i].snippet.thumbnails;
        
        console.log(thumbnails);

        const content_list = document.createElement('div');
        const content_thumbnail = document.createElement('div');
        const thumbnail_link = document.createElement('a');
        const img = document.createElement('img');
        const description = document.createElement('div');
        const avatar_link = document.createElement('a');
        const media = document.createElement('div');
        const title = document.createElement('h3');
        const metadata = document.createElement('div');
        const channel = document.createElement('span');
        const datatime = document.createElement('span');

        //クラス付与
        content_list.classList.add('c-content_list');
        content_thumbnail.classList.add('c-content_thumbnail');
        thumbnail_link.classList.add('c-thumbnail_link');
        description.classList.add('c-content_description');
        avatar_link.classList.add('c-avatar_link');
        media.classList.add('c-description_media');
        title.classList.add('c-title');
        metadata.classList.add('c-metadata');
        channel.classList.add('c-channel');
        datatime.classList.add('c-datatime');

        //動画情報格納
        img.src = thumbnails.high.url;
        title.textContent = json.items[i].snippet.title;
        channel.textContent = json.items[i].snippet.videoOwnerChannelTitle;

        //要素追加
        data.appendChild(content_list);
        content_list.appendChild(content_thumbnail);
        content_list.appendChild(description);
        content_thumbnail.appendChild(thumbnail_link);
        thumbnail_link.appendChild(img);
        description.appendChild(avatar_link);
        description.appendChild(media);
        media.appendChild(title);
        media.appendChild(metadata);
        metadata.appendChild(channel);
        metadata.appendChild(datatime);

        data.appendChild(content_list);
    }
}