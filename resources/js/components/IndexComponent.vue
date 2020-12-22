<template>
  <!-- <div class="container">
    <div v-if="count($items) >= 1">
      <div class="row row-cols-1 row-cols-md-3"></div>
    </div>
  </div> -->

  <!-- <div class="container">
    @if(count($items) >= 1)
    <div class="row row-cols-1 row-cols-md-3"></div>
  </div> -->
  <div class="container">
    <div v-if="$items >= 1">
      <div class="row row-cols-1 row-cols-md-3">
        <ul>
          <!-- <li v-for="(item, index) in items" :key="index">{{ item.name }}</li> -->
          <li v-for="(item, index) in items" :key="index">{{ item.name }}</li>

          <!-- <li :list="list"></li> -->
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  // 首頁
  // props: {
  //   id: Number,
  //   name: String,
  // },
  props: ["list"],
  data: function () {
    return {
      items: "",
      // list: [
      //   { name: "Adam", id: 1 },
      //   { name: "Jack", id: 2 },
      //   { name: "Candy", id: 3 },
      //   { name: "Louis", id: 4 },
      //   { name: "Lurry", id: 5 },
      // ],
    };
  },
  mounted() {
    this.loadProducts();
    // like ajax

    // axios
    //   .get("/api/home")
    //   .then(function (response) {
    //     // handle success
    //     console.log("success");
    //     console.log(response);
    //   })
    //   .catch(function (error) {
    //     // handle error
    //     console.log("error");
    //     console.log(error);
    //   })
    //   .then(function () {
    //     // always executed
    //   });
  },
  methods: {
    loadProducts: function () {
      // load API
      axios
        .get("/api/home")
        .then((response) => {
          this.items = response.data;
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