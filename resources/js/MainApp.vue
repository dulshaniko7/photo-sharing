<template>
    <div>
        <Navi></Navi>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navi from "./components/Navi";
    export default {
        name: "MainApp",
        components: {Navi}
    }
</script>

<style scoped>

</style>
