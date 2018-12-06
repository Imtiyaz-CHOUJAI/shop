<template>
    <div>
        <shop-container></shop-container>
        <!-- <shop-details></shop-details> -->
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('App mounted')
        },
        components: {   
            ShopContainer: require('./components/ShopContainer.vue'),
        }    
    }
</script>
