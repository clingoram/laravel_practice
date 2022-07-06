<template>
  <!-- Header 使用者資訊(登出、登入、註冊、個人檔案) -->
  <b-nav-item-dropdown right>
    <template #button-content>
      <em>使用者</em>
    </template>
    <!-- <b-dropdown-item href="#">Profile</b-dropdown-item> -->
    <!-- <b-dropdown-item href="#">註冊</b-dropdown-item> -->
    <!-- <b-dropdown-item href="#">登入</b-dropdown-item> -->

    <router-link to="/login">登入</router-link>
    <br />
    <router-link to="/register">註冊</router-link>
  </b-nav-item-dropdown>
</template>
<script>
// import Register from "./UserRegisterForm.vue";
export default {
  // name: "RegisterPage",
  components: {
    // Register,
  },
};
</script>
