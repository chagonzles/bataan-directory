var app = new Vue({
    el: '#app',
    data: {
        apiUrl: "http://localhost/bataan-directory/api/",
        thumbnailBaseUrl: "public/establishments/",
        name: "",
        location: "",
        category: "",
        locationOptions: ["Abucay","Balanga","Bagac","Dinalupihan","Hermosa","Limay",
                          "Mariveles","Orani","Orion","Pilar","Samal"],
        categoryOptions: ["Automotives","Beach & Resorts",
                          "Computers & Technology","Fashion & Beauty",
                          "Foods & Drinks","Government Agencies",
                          "Hardware & Furniture", "Hobbies & Recreation",
                          "Hospitals & Clinics","Hotels & Travel",
                          "Schools & Instutitions","Sports & Fitness"],
        searchResults: null
    },
    methods: {
        searchEstablishments() {
            axios.get(this.apiUrl + 'establishments/search', {
                params: {
                    name: this.name,
                    location: this.location,
                    category: this.category
                }
            }).then(result =>{
                console.log(this.name, this.location, this.category)
                console.log(result)
                this.searchResults = result.data;
            })
        }
    },
    mounted() {
    }
  })