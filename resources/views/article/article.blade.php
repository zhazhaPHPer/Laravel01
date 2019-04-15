<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<style>
    table {
        border: 1px solid darkred;
    }

    #app table td {
        border: 1px darkred solid;
        text-align: center;

    }
</style>
<div id="app">
    <table cellpadding="0" cellspacing="0" width="300px">
        <tr>
            <td>文章ID</td>
            <td>标题</td>
            <td>logo</td>
        </tr>
        <tr v-for="(val,key) in artcile">
            <td>@{{ val.id }}</td>
            <td>@{{ val.title }}</td>
            <td><img :src="val.logo" alt=""></td>
        </tr>


    </table>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            artcile: [],

        },
        mounted: function () {
            axios.get('/article/list').then((backdata) => {
                console.log(backdata.data.data);
                this.artcile = backdata.data.data;

            });
        },
        methods: {}

    })
</script>