const notif = Vue.createApp({
    data() {
        return {
            nutt: []
        }
    },
    mounted() {
        this.YouCunt();
        setInterval(this.YouCunt, 1000);
    },
    methods: {
         // NOTICE ME SENPAI

         YouCunt() {
            const master = localStorage.getItem('UserID');
            $.ajax({
                url: `notif-count.php?uid=${master}`,
                method: 'GET',
                dataType: 'json',
                success: (data) => {
                    this.nutt = data.total_likes;
                    console.error(data.total_likes);
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        }
    }
});

notif.mount("#notifa");