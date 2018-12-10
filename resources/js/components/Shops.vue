<template>
    <div>
        <ul class="cd-items cd-container">
            <shop v-for="shop in shops" :key="shop.id" :shop="shop"></shop>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                shops: shop.shops,
            }
        },
        components: {
            Shop: require('./Shop.vue'),            
        }
    }
</script>
