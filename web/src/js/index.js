$ = require('jquery');
let resultContainer = document.getElementById('search_result');
const placeholder = 'http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder-300x300.png';

document.getElementById('search_input').addEventListener('input', e => {
   let query = e.target.value;
   if(query) {
       query = query.replace(/ /g, '-');
       fetch(`http://api.tvmaze.com/search/shows?q=${query}`)
           .then(res=>res.json())
           .then(data => {
               let resultHtml = '';
               data.forEach(result => {
                   if(result.show.status !== 'Ended') {
                       let show = result.show;
                       let imgSrc = (show.image && show.image.medium) ? show.image.medium : placeholder;
                       resultHtml += `<div><a href="/series/${show.id}" style="border: black 1px solid"><img width="60px" height="100px" src="${imgSrc}" alt="${show.name}">${show.name}</a></div>`
                   }
               });

               resultContainer.innerHTML = resultHtml;
           });
   }else{
       resultContainer.innerHTML = '';
   }
});

let seriesNameSpans = document.getElementsByClassName('series-name');
[].forEach.call(seriesNameSpans, span => {
    let id = span.getAttribute('data-id');
    fetch(`http://api.tvmaze.com/shows/${id}`)
        .then(res=>res.json())
        .then(data => {
            span.innerHTML = data.name;
        });
});

let seriesRemoveButtons = document.getElementsByClassName('series-remove');
[].forEach.call(seriesRemoveButtons, button => {
    let id = button.getAttribute('data-id');
    button.addEventListener('click', e => {
        $.post('/series/remove', {id: id}, response => {
            if(response.status === 200) {
                document.getElementById(`row-${id}`).outerHTML = '';
            }
        });
    });
});




