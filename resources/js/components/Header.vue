<template>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Online Shop</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">Link</b-nav-item>
        <b-nav-item href="#" disabled>Disabled</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <search-area></search-area>
        <user-menu></user-menu>

        <!-- <b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">ES</b-dropdown-item>
          <b-dropdown-item href="#">RU</b-dropdown-item>
          <b-dropdown-item href="#">FA</b-dropdown-item>
        </b-nav-item-dropdown> -->
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script>
import SearchArea from "./Search.vue";
import UserMenu from "./UserMenu.vue";
export default {
  components: {
    SearchArea,
    UserMenu,
  },
  // menu
  mounted() {
    console.log("Menu");
  },
  // data: function () {
  //   return {
  //     item: {
  //       role: user.role,
  //       id: user.id,
  //     },
  //   };
  // },
};
</script>
<style scoped>
image {
  width: 200px;
}
</style>