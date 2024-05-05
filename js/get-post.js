const content = Vue.createApp({
    data() {
        return {
            contents: []
        }
    },
    mounted() {
        this.FetchPost();
    },
    methods: {
        FetchPost() {
            $.ajax({
                url: `fetch_posts.php`,
                method: 'GET',
                dataType: 'json',
                success: (data) => {
                    this.contents = data;
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        },
        DeletePost(id) {
            $.ajax({
                url: `delete-posts.php?post_id=${id}`,
                success: () => {
                    location.reload();
                },
                error: (error) => {
                    console.error("Error deleting post:", error);
                }
            });
        }
    }
});

content.mount("#ContentGet");