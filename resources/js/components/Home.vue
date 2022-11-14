<template>
    <div>
        <ul>
            <li>
                <router-link to="/users">Users list</router-link>
            </li>
            <li>
                <router-link to="/admin">Admin</router-link>
            </li>
        </ul>
        <router-view/>
    </div>
</template>

<script>
import User from "./User.vue";

export default {
    name: "Home",

}
</script>

<style scoped>

</style>
