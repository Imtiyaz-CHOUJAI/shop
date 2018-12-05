<template>
    <div>
        <ul class="cd-items cd-container">
            <li class="cd-item" v-for="shop in shops" :key="shop.id">
                <img src="img/item-3.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger" @click="like(shop)">View {{ shop.name }}</a>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        mounted() {
        },
        data() {
            return {
                shops: shop.shops
            }
        },
        methods: {
            like(shop) {
                console.log('like', shop)
            }
        }
    }
</script>
