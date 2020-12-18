<template>
  <div class="menu">
    <div v-if="role == 'A'">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="/product">上架</a>
        </li>
      </ul>

      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="/cart/id">購物車</a>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
// import UploadproductComponent from "./uploadproductcomponent";
// import ShoplistComponent from "./shoplistcomponent";
// import IndexComponent from "./indexcomponent";

export default {
  // menu
  mounted() {
    console.log("Menu");
  },
  data: function () {
    return {
      item: {
        role: user.role,
        id: user.id,
      },
    };
  },
};
</script>
<style scoped>
image {
  width: 200px;
}
</style>