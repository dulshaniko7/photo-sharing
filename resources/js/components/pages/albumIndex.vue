<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(a,index) in albums" :value="a.id" :key="index">

                <td>{{a.name}}</td>
                <td>{{a.description}}</td>
                <td>{{a.category.name}}</td>
                <td class="w-25">
               <img alt="" :src="'/album/'+a.image" class="img-fluid img-thumbnail">
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "albumIndex",
        data() {
            return {
                albums: []
            }
        },
        mounted() {
            axios.get('/api/albums')
                .then(response => {
                    this.albums = response.data
                })
                .catch((error) =>{
                    console.log(error)
                })
        }
    }
</script>

<style scoped>

</style>
