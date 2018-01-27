var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    },
    methods: {
        getUsers() {
            axios.get('http://localhost/bataan-directory/api/example/users').then(response => {
                console.log(response)
            })
        }
    },
    mounted() {
        this.getUsers();
    }
  })