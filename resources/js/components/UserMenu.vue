<template>
  <!-- 使用者資訊(登出、登入、註冊、個人檔案) -->
  <!-- 判斷是否有登入，依據狀況在dropdown顯示不同頁面連結 -->
  <b-nav-item-dropdown right>
    <template #button-content>
      <em>使用者</em>
    </template>
    <!-- <b-dropdown-item href="#">個人檔案</b-dropdown-item> -->
    <router-link to="/login">登入</router-link>
    <br />
    <router-link v-bind:to="{ name: 'register-page' }">註冊</router-link>
  </b-nav-item-dropdown>
</template>
<script>
export default {
  components: {
    // Register,
  },
};
</script>
