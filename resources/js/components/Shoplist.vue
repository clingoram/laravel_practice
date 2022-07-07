<template>
  <!-- 購物車，顯示該使用者購物車內的所有商品 -->
  <div>
    <h6 class="title-canter">購物車</h6>
  </div>
</template>
<script>
export default {
  // 首頁
  // props: {
  //   items_number: Number,
  // },
  data: function () {
    return {
      items_number: true,
      items: [],

      // list: [
      //   { name: "Adam", id: 1 },
      //   { name: "Jack", id: 2 },
      //   { name: "Candy", id: 3 },
      //   { name: "Louis", id: 4 },
      //   { name: "Lurry", id: 5 },
      // ],
    };
  },
  // don't delete!!
  mounted() {
    this.loadProducts();
    console.log("je");
  },
  methods: {
    // 載入購物車table
    loadProducts: function () {
      // load API
      axios
        .post("/api/cart")
        .then((response) => {
          this.items = response.data;
          console.log(response);
        })
        .catch((error) => {
          console.log(error);
        });

      // .then(function (response) {
      //   // handle success
      //   console.log("success");
      //   console.log(response);
      // })
      // .catch(function (error) {
      //   // handle error
      //   console.log("error");
      //   console.log(error);
      // });
    },
  },
};
</script>