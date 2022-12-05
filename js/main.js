const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            albums: [],
            details: [],
            activeIndex: null,
            isHover: false,

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
            this.isHover = true;
            axios.get(this.apiUrl, {params:{
                albumIndex:index}}
                ).then(result => {
                    this.details = result.data
                    console.log(result.data);
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