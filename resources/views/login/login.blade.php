<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<div id="app">
    <h4>登录页面</h4>
    <form action="/login/login" method="post">
        用户名: <input type="text" name="username" v-model="username" required><br>
        密码: <input type="password" name="pwd" v-model.trim="pwd" required><br>
        <input type="button" value="登录" @click="click"><br>
    </form>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            username: '',
            pwd: '',
        },
        methods: {
            click() {
                // console.log(this.pwd);
                // console.log(this.username);
                // console.log(this.data);
                axios.post('/login/login', {
                    data: {
                        username: this.username,
                        pwd: this.pwd
                    }
                }).then(function (response) {
                    // console.log(response.data.code);
                    if (response.data.code === 200) {
                        // console.log(response.data.msg);
                        window.location.href = "/article/article";
                    } else {
                        alert(response.data.msg);
                    }
                });
            },
        }

    })
</script>