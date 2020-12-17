<template>
  <div class="container">
    <h6 class="title-canter">購物車</h6>
    <div v-if="$shopcartdata >= 1"></div>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.......And, HI!!");
  },
};
</script>