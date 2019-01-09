<style>
.no-liked-shops {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  margin-top: 20px;
}
</style>

<template>
  <div>
    <div v-if="!likedShops" class="no-liked-shops">You have no preferred shops</div>
    <ul class="cd-items cd-container" v-else>
      <shop v-for="shop in likedShops" :key="shop.id" :shop="shop" :likesPage="true"></shop>
    </ul>
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
