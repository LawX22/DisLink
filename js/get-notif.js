const notif = Vue.createApp({
    data() {
        return {
            notifff: [],
            nutt: 0
        }
    },
    mounted() {
        this.GetNotifff();
        this.YouCunt();
        setInterval(this.YouCunt, 1000);
        setInterval(this.GetNotifff, 1000);
    },
    methods: {
         // NOTICE ME SENPAI

         GetNotifff() {
            const master = localStorage.getItem('UserID');
            $.ajax({
                url: `notif-get.php?uid=${master}`,
                method: 'GET',
                dataType: 'json',
                success: (data) => {
                    this.notifff = data;
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        },

         YouCunt() {
            const master = localStorage.getItem('UserID');
            $.ajax({
                url: `notif-count.php?uid=${master}`,
                method: 'GET',
                dataType: 'json',
                success: (data) => {
                    this.nutt = data.total_likes;
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        }
    }
});

notif.mount("#notifa");