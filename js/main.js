const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            albums: [],
            activeIndex: null,

        }
    },
    methods:{
        getAlbums(){
            axios.get(this.apiUrl)
            .then(result => {
                this.albums = result.data;
            })
        },
        getDetails(index){
            this.activeIndex = index;
            //console.log(this.activeIndex);
        }
    },
    mounted(){
        console.log('MONTATA');
        this.getAlbums();
    },
    created(){
        console.log('CREATA');
    },
}).mount('#App');