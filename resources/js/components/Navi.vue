<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">photoshare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name : 'index'}">Photos</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name : 'login'}">Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name : 'register'}">Register</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Navi"
    }
</script>

<style scoped>

</style>
