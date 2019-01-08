<template>
  <div>Liked shops to display here
    <div>
      <ul class="cd-items cd-container">
        <shop v-for="shop in likedShops" :key="shop.id" :shop="shop" :likesPage="true"></shop>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      shops: shop.shops
    };
  },
  components: {
    Shop: require("./Shop.vue")
  },
  computed: {
    likedShops() {
      return this.shops.filter(
        item =>
          item.likes.length !== 0 && item.likes[0].user_id === shop.user.id
      );
    }
  }
};
</script>
