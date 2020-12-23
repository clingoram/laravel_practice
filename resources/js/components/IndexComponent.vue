<template>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
      <div v-if="items_number">
        <div v-for="(item, index) in items" :key="index">
          <div class="col mb-4">
            <div class="card">
              <!-- <a href="/api/product/{{ item.id }}">
                <div v-if="item.image_path != 'no_image.jpeg'">
                  <img
                    style="width: 200px"
                    src="/storage/images/{{ item.image_path }}"
                  />
                </div> -->
              <div class="card-body">
                <h5 class="card-title">{{ item.name }}</h5>
                <p class="card-text">${{ item.price }}</p>
                <p class="card-text">商品數量: {{ item.amount }}</p>
              </div>
              <!-- </a> -->
            </div>
          </div>
        </div>
      </div>
      <div v-else>NO Data</div>
    </div>
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
  },
  methods: {
    loadProducts: function () {
      // load API
      axios
        .get("/api/home")
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