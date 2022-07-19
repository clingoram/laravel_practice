<template>
  <!-- 首頁，載入所有商品(圖片+名稱+價格) -->
  <div class="container">
    <slideshow></slideshow>
  </div>
</template>
<script>
import slideshow from "./Carousel.vue";
export default {
  // 首頁
  props: {
    // items_number: Number,
  },
  components: {
    slideshow,
  },
  data: function () {
    return {
      items_number: true,
      items: [],
      imagesShow: true,
    };
  },
  mounted() {
    // this.loadProducts();
  },
  methods: {
    // 載入所有商品
    loadProducts: function () {
      // load API
      axios
        .get("/api/shop")
        .then((response) => {
          this.items = response.data;
          console.log(response);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>