
require('./bootstrap');

window.Vue = require('vue').default;

import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);

Vue.component('message-component', require('./components/MessageComponent.vue').default);


const app = new Vue({
    el: '#app',
    data:{
        message: '',
        chat: {
            message: []
        }
    },

    methods: {
        send(){
            if(this.message.length>0) {
                this.chat.message.push(this.message);
                this.message = ''
            }
        }

    }
});
