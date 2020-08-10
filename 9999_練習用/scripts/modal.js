//modalで使うやつです
Vue.component('modal', {
    template: '#modal-template'
})

Vue.component('modal-image', {
    template: '#modal-image-template'
})
 
new Vue({
    el: '#modal-image',
    data: {
        showModal: false,
    }
})
 
new Vue({
    el: '#modal',
    data: {
        showModal: false,
    }
})
