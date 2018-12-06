<style>
    .like-shop {
        position: absolute;
        top: 1rem;
        right: 1rem;
        font-size: 28px;
        color: #eee;
        transition: all .4s;
    }
    .like-shop:hover {
        color: #eee;
        transform: translateY(-2px) scale(1.1);
    }
    .liked {
        color: red !important;
    }
</style>

<template>
    <li class="cd-item">
        <img src="img/item-1.jpg" alt="Item Preview">

        <a @click="like()" href="#" class="like-shop" :class="{'liked': liked}">
            <i class="fas fa-heart"></i>
        </a>
        
        <a href="#0" class="cd-trigger">{{ shop.name }}</a>
    </li>
</template>

<script>
    export default {
        props: ['shop'],
        data() {
            return {
            
            }
        },
        computed: {
            liked() {
                if (this.shop.likes.length !== 0) {
                    return this.shop.likes[0].user_id === shop.user.id
                }

                return false
            }
        },
        methods: {
            like() {
                console.log('like', this.shop)
                
                axios.post('api/shop/like', {
                    id : this.shop.id,
                    api_token: shop.user.api_token
                })
                .then((response) => {
                    console.log(response)
                }).catch((error) => {
                    this.$store.commit('throwError','Please try again later')
                })
            }
        }
    }
</script>
