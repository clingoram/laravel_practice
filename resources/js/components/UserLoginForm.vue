<template>
  <!-- 登入 -->
  <div class="container">
    <h1>登入</h1>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="loginKey" label="帳號名稱" label-for="loginKey">
        <b-form-input
          id="login_key"
          v-model="form.account"
          placeholder="使用者名稱"
          required
        ></b-form-input>
      </b-form-group>

      <b-form-group id="loginPassword" label="密碼" label-for="loginPassword">
        <b-form-input
          id="login_password"
          v-model="form.password"
          placeholder="密碼"
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="outline-primary">送出</b-button>
      <b-button type="reset" variant="danger">重設</b-button>
      <b-button variant="dark">忘記密碼?</b-button>

      <p>沒有帳號?到<router-link to="/register">註冊</router-link></p>
    </b-form>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("login");
  },
  data() {
    return {
      form: {
        email: "",
        name: "",
      },
      show: true,
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.email = "";
      this.form.name = "";
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>
