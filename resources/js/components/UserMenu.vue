<template>
  <!-- 使用者資訊(登出、登入、註冊、個人檔案) -->
  <!-- 判斷是否有登入，依據狀況在dropdown顯示不同頁面連結 -->
  <b-nav-item-dropdown right>
    <template #button-content>
      <!-- <span v-if="isLoggedIn === true">
        <em>loggedName</em>
      </span> -->
      <em>使用者</em>
    </template>
    <!-- <span v-if="isLoggedIn === true">
      <a v-on:click="logout">登出</a>
    </span>
    <span v-else> -->
    <router-link to="/login">登入</router-link>
    <br />
    <router-link v-bind:to="{ name: 'register-page' }">註冊</router-link>
    <!-- </span> -->

    <!-- <b-dropdown-item href="#">個人檔案</b-dropdown-item> -->
  </b-nav-item-dropdown>
</template>
<script>
export default {
  props: ["isLoggedIn", "loggedName"],
  // components: {},
  data() {
    isLoggIn: this.isLoggedIn;
  },
  computed: {
    // isLoggedIn: function () {
    // if (this.isLoggIn === true) {
    // }
    // return "loggin";
    // return this.$store.getters.isAuthenticated;
    // },
  },
  methods: {
    logout() {
      // axios
      // .post(){
      // }
    },
  },
};
</script>
