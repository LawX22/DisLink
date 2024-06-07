const content = Vue.createApp({
    data() {
        return {
            contents: [],
            comments: [],
            curuser: ""
        }
    },
    mounted() {
        this.curuser = localStorage.getItem('UserID');
        this.FetchPost(() => {
            const form = document.getElementById('myFreeWill');
            form.addEventListener('submit', this.HandleBar);
        });
    },
    methods: {
        FetchPost() {
            const UID = localStorage.getItem('UserID');
            $.ajax({
                url: `fetch_posts.php?cuid=${UID}`,
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
                    this.FetchPost();
                }
            });
        },
        DeletePost(id) {
            $.ajax({
                url: `delete-posts.php?post_id=${id}`,
                success: () => {
                    this.FetchPost();
                },
                error: (error) => {
                    console.error("Error deleting post:", error);
                }
            });
        },


        //FOR COMMENT

        HandleBar(event) {
            event.preventDefault();
            const userId = localStorage.getItem('UserID');
            const formData = new FormData(event.target);
            formData.append('userid', userId);

            $.ajax({
                url: 'comment.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: () => {
                    this.FetchPost();
                },
                error: function(error) {
                    console.error('Network response was not ok', error);
                }
            });
        },
        FetchMeth(id) {
            $.ajax({
                url: `fetch_meth.php?id=${id}`,
                method: 'GET',
                dataType: 'json',
                success: (data) => {
                    this.comments = data.map(comment => ({
                        ...comment,
                        cmei: false,
                        cmel: comment.comment_text
                    }));
                },
                error: (error) => {
                    console.error("Error fetching data:", error);
                }
            });
        },
        ChangeMyWill(id){
            this.comments = this.comments.map(comment => ({
                ...comment,
                cmei: comment.id === id
            }));
        },
        CancelMyLife(meth) {
            meth.cmei = false;
            meth.cmel = meth.comment_text;
        },
        ChangeLife(meth) {
            $.ajax({
                url: `edit-comment.php?methid=${meth.id}&methe=${meth.cmel}`,
                success: () => {
                    location.reload();
                }
            });
        },
        StopLife(id) {
            $.ajax({
                url: `delete-meth.php?meth_id=${id}`,
                success: () => {
                    location.reload();
                },
                error: (error) => {
                    console.error("Error deleting post:", error);
                }
            });
        },


    }
});

content.mount("#ContentGet");