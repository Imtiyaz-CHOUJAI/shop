<style>
.like-shop {
  position: absolute;
  top: 1rem;
  left: 1rem;
  font-size: 28px;
  color: #eee;
  transition: all 0.4s;
}
.dislike-shop {
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 28px;
  color: #eee;
  transition: all 0.4s;
}
.like-shop:hover,
.dislike-shop:hover {
  color: #eee;
  transform: translateY(-2px) scale(1.1);
}
.liked {
  color: #db5461 !important;
}
</style>

<template>
  <li class="cd-item" v-if="(!likesPage && !liked) || likesPage">
    <img src="img/item-1.jpg" alt="Item Preview">
    
    <a @click="like()" href="#" class="like-shop" :class="{'liked': liked}">
      <i class="fas fa-heart"></i>
    </a>
    
    <a @click="dislike()" href="#" class="dislike-shop">
      <i class="fas fa-heart-broken"></i>
    </a>
    
    <a href="#" class="cd-trigger">{{ shop.name }}</a>
  </li>
</template>

<script>
export default {
  props: {
    shop: {
      type: Object,
      default: {}
    },
    likesPage: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {};
  },
  computed: {
    liked() {
      if (this.shop.likes.length !== 0) {
        return this.shop.likes[0].user_id === shop.user.id;
      }

      return false;
    },
    disliked() {
      if (this.shop.dislikes.length !== 0) {
        return this.shop.likes[0].user_id === shop.user.id;
      }

      return false;
    }
  },
  methods: {
    like() {
      if (!liked) {
        axios
          .post(`/shop/like/${this.shop.id}`)
          .then(response => {
            this.shop.likes = response.data.likes;
          })
          .catch(error => {
            this.$store.commit("throwError", "Please try again later");
          });
      }
    },
    dislike() {
      if (!disliked) {
        axios
          .post(`/shop/dislike/${this.shop.id}`)
          .then(response => {
            this.shop.likes = response.data.likes;
          })
          .catch(error => {
            this.$store.commit("throwError", "Please try again later");
          });
      }
    }
  }
};
</script>
