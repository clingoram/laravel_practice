<template>
  <!-- 註冊頁面 -->
  <div class="container">
    <h1>註冊</h1>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group
        id="registerAccount"
        label="帳號名稱"
        label-for="registerAccount"
        description="請輸入數字0-9及大小寫字母。"
      >
        <b-form-input
          id="register_account"
          v-model="form.account"
          placeholder="帳號"
          required
          v-bind:max="15"
          v-bind:min="5"
        ></b-form-input>
      </b-form-group>

      <b-form-group
        id="registerEmail"
        label="Email:"
        label-for="registerEmail"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="register_email"
          v-model="form.email"
          type="email"
          placeholder="Email"
          required
        ></b-form-input>
      </b-form-group>

      <b-form-group
        id="registerPassword"
        label="密碼"
        label-for="registerPassword"
        description="請輸入數字0-9及大小寫字母。"
      >
        <b-form-input
          id="register_password"
          v-model="form.password"
          placeholder="密碼"
          required
          v-bind:max="15"
          v-bind:min="5"
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="outline-primary">送出</b-button>
      <b-button type="reset" variant="danger">重設</b-button>
      <p>已有帳號?到<router-link to="/login">登入</router-link></p>
    </b-form>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("register");
  },
  data() {
    return {
      form: {
        email: "",
        account: "",
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
      this.form.account = "";
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>