const { createApp } = Vue;

createApp({
    data() {
        return {
            arrDisc: [],
        }
    },
    methods: {
        requestApi() {
            axios.get('http://localhost:8080/php-dischi-json/my_index.php').then(response => this.arrDisc = response.data)
        }
    },
    created() {
    }
}).mount('#app');