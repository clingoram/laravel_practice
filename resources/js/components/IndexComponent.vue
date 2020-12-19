<template>
  <!-- <div class="container">
    <div v-if="count($items) >= 1">
      <div class="row row-cols-1 row-cols-md-3"></div>
    </div>
  </div> -->

  <div class="container">
    <div v-if="$items >= 1">
      <div class="row row-cols-1 row-cols-md-3">
        <ul>
          <li v-for="(item, index) in list" :key="index">{{ item.name }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  // 首頁
  mounted() {
    console.log("Index");
  },
  data() {
    return {
      list: [
        { name: "Adam", id: 1 },
        { name: "Jack", id: 2 },
        { name: "Candy", id: 3 },
        { name: "Louis", id: 4 },
        { name: "Lurry", id: 5 },
      ],
    };
  },
};
</script>