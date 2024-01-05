const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Ciao Vue!',
            dischi: null,
        }
    },
    methods: {

    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                //console.log(response);
                this.dischi = response.data
            })
    }
}).mount('#app')