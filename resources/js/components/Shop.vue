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
  color: #ce0014 !important;
}
</style>

<template>
  <li class="cd-item" v-if="(!likesPage && !liked) || likesPage">
    <img :src="`img/${shop.image}`" alt="Item Preview">
    
    <a
      @click="like()"
      href="javascript:;"
      class="like-shop"
      :class="{'liked': liked}"
      title="Like Shop"
    >
      <i class="fas fa-heart"></i>
    </a>
    
    <a
      @click="dislike()"
      v-if="!likesPage"
      href="javascript:;"
      class="dislike-shop"
      title="Dislike Shop"
    >
      <i class="fas fa-heart-broken"></i>
    </a>
    
    <a href="javascript:;" class="cd-trigger">{{ shop.name }}</a>
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
      if (!this.liked) {
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
      if (!this.disliked) {
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
