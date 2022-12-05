const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            albums: [],

        }
    },
    methods:{
        getAlbums(){
            axios.get(this.apiUrl)
            .then(result => {
                this.albums = result.data;
            })
        },
    },
    mounted(){
        console.log('MONTATA');
        this.getAlbums();
    },
    created(){
        console.log('CREATA');
    },
}).mount('#App');