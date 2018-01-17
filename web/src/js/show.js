$ = require('jquery');

let resultContainer = document.getElementById('search_result');
const placeholder = 'http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder-300x300.png';

const radios = document.getElementsByClassName('notify-options');
let prev = null;
for(let i = 0; i < radios.length; i++) {
    radios[i].onclick = function() {
        if(this !== prev) {
            prev = this;
            let id = this.getAttribute('data-id');
            let code = this.value;
            let data = {id: id, code: code};
            $.post('/series/save', data);
        }
    };
}
