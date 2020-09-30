<template>
    <div>
        <h3> Add Albums</h3>
        <br>
        <router-link class="nav-link" :to="{name : 'albumAdd'}">Add Albums</router-link>
        <router-link class="nav-link" :to="{name : 'albumIndex'}">All Albums</router-link>
    </div>
</template>

<script>
    export default {
        name: "dashboard"
    }
</script>

<style scoped>

</style>
