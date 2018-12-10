<style>
    .link {
        padding-left: 15px;
    }
    .active {
        color: #000;
        text-decoration: underline;
    }
</style>

<template>
    <div>
        <div class="text-right">
            <router-link to="/" class="link" :class="{'active': active('all')}">All shops</router-link>
            <router-link to="/liked" class="link" :class="{'active': active('liked')}">Prefferd shops</router-link>
        </div>

        <router-view></router-view>
    </div>
</template>
<script>
    export default {
        mounted() {
        },
        methods: {
            active(pageName) {
                if (this.$route.name === pageName) {
                    return true
                }

                return false
            }
        }
    }
</script>
