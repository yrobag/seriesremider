$ = require('jquery');
api = require('./api');

const functions = {
    searchEvent: () =>{

        const resultContainer= document.getElementById('search_result');
        const placeholder= 'http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder-300x300.png';
        document.getElementById('search_input').addEventListener('input', e => {
            let query = e.target.value;
            if(query) {
                query = query.replace(/ /g, '-');
                fetch(`${api.search}${query}`)
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

    },


    loadNames: () => {

        let seriesNameSpans = document.getElementsByClassName('series-name');
        [].forEach.call(seriesNameSpans, span => {
            let id = span.getAttribute('data-id');
            fetch(`${api.show}${id}`)
                .then(res=>res.json())
                .then(data => {
                    span.innerHTML = data.name;
                });
        });

    },

    prepareToRemove: () => {

        let seriesRemoveButtons = document.getElementsByClassName('series-remove');
        [].forEach.call(seriesRemoveButtons, button => {
            let id = button.getAttribute('data-id');
            button.addEventListener('click', e => {
                $.post(api.remove, {id: id}, response => {
                    if(response.status === 200) {
                        document.getElementById(`row-${id}`).outerHTML = '';
                    }
                });
            });
        });

    },

    updateReminder: () => {

        let messageContainer = document.getElementById('message-container');
        const radios = document.getElementsByClassName('notify-options');
        let prev = null;
        for(let i = 0; i < radios.length; i++) {
            radios[i].onclick = function() {
                if(this !== prev) {
                    prev = this;
                    let id = this.getAttribute('data-id');
                    let code = this.value;
                    let data = {id: id, code: code};
                    $.post(api.save, data, response => {
                        if(response.status === 300) {
                            document.location.href = '/'
                        }else {
                            let color = response.status === 200 ? 'green' : 'red';
                            messageContainer.innerHTML = `<div style="color: ${color}">${response.message}</div>`;
                            setTimeout(() => {
                                messageContainer.innerHTML = '';
                            }, 3000);
                        }
                    });
                }
            };
        }

    },
};



module.exports = functions;







