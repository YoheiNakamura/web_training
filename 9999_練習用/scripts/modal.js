
Vue.component('item-modal', {
    template: '#item-modal-template',
    methods: {
        clickEvent: function () {
            this.$emit('from-child')
        }
    }
})
Vue.component('thread-modal', {
    template: '#thread-modal-template',
    methods: {
        clickEvent: function () {
            this.$emit('from-child')
        }
    }
})


Vue.component('modal-image', {
    template: '#modal-image-template'
})

Vue.component('open-modal', {
    template: '#sample-template',
    methods: {
        clickEvent: function () {
            this.$emit('from-child')
        }
    }
})

new Vue({
    el: '#sample',
    data: {
        show: false
    },
    methods: {
        openModal: function () {
            this.show = true;
            
        },
        closeModal: function () {
            this.show = false;
        },
    }
})

new Vue({
    el: '#modal-image',
    data: {
        showModal: false,
    }
})

new Vue({
    el: '#item-modal',
    data: {
        showModal: false,
    },
    methods: {
        openModal: function () {
            this.showModal = true;
        },
        closeModal: function () {
            this.showModal = false;
        },
    }
})

new Vue({
    el: '#thread-modal',
    data: {
        showModal: false,
    },
    methods: {
        openModal: function () {
            this.showModal = true;
        },
        closeModal: function () {
            this.showModal = false;
        },
    }
})

function test() {
    console.log(document.getElementById("test"));
}


function hoge(e) {
    console.log(e.target);
    console.log(e.target.querySelector("img"));
}
var el = document.getElementById("test");
//el.addEventListener("click",hoge, false);
