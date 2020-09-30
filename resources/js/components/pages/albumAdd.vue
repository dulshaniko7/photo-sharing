<template>
    <div>

        <div class="container">
            <h2>AddAlbum</h2>

            <form enctype="multipart/form-data" @submit.prevent="createAlbum" >
                <div class="form-group">
                    <label for="name">Name of the Album</label>
                    <input type="text" class="form-control" id="name" name="name" v-model="form.name">
                    <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>

                </div>
                <div class="form-group">
                    <label for="name">Description of the Album</label>
                    <input type="text" class="form-control" name="description" v-model="form.description">
                    <small class="text-danger" v-if="errors.description">{{errors.description[0]}}</small>
                </div>
                <div class="form-group">
                    <label for="image">Image of the album</label>
                    <input type="file" class="form-control" name="image"  id="image" v-on:change="onImageChange">
                    <img :src="form.photo" alt="image" style="height: 200px; width: 400px">
                </div>

                <div class="form-group">
                    <label for="Category">Image Category</label>
                    <select class="form-control" name="category_id" id="Category" v-model="form.category_id">
                        <option v-for="(cat, index) in categories" :key="index" :value="cat.id">
                            {{cat.name}}
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Album</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "albumAdd",
        data() {
            return {
                form: {
                    name: null,
                    category_id: null,
                    description: null,
                    image: null,
                    photo: null
                },
                categories: null,
                errors: {}
            }
        },
        mounted() {
            axios.get('/api/category')
                .then(response => {
                    this.categories = response.data.data
                })
        },
        methods: {
            createAlbum() {
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                let formData = new FormData();
                formData.append('image', this.form.image)
                formData.append('name', this.form.name)
                formData.append('description', this.form.description)
                formData.append('category_id', this.form.category_id)
                formData.append('user_id', localStorage.getItem('id'))
                axios.post('/api/albums', formData, config)
                    .then(() => {
                        this.$router.push({name: 'dashboard'})
                    })
                    .catch(error => console.log(error.response.data))

            },
            onImageChange(event) {
                let file = event.target.files[0]
                this.form.image = event.target.files[0]
                let reader = new FileReader()
                reader.readAsDataURL(file)
                reader.onload = event => {
                    this.form.photo = event.target.result
                    console.log(event.target.result)
                }
            }
        }
    }
</script>

<style scoped>

</style>
