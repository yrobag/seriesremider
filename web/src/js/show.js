$ = require('jquery');

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
            $.post('/series/save', data, response => {

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
