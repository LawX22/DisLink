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
                    this.contents = data.map(content => ({
                        ...content,
                        mei: false,
                        mel: content.content
                    }));
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        },
        EditContent(id){
            this.contents = this.contents.map(content => ({
                ...content,
                mei: content.id === id
            }));
        },
        Cancel(post) {
            post.mei = false;
            post.mel = post.content;
        },
        Save(post) {
            $.ajax({
                url: `edit-content.php?postid=${post.id}&content=${post.mel}`,
                success: () => {
                    location.reload();
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