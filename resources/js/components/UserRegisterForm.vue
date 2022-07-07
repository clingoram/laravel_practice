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
          v-model.trim="form.account"
          placeholder="帳號"
          required
          v-bind:max="max"
          v-bind:min="min"
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
          type="password"
          required
          v-bind:max="max"
          v-bind:min="min"
        ></b-form-input>
      </b-form-group>

      <b-button
        type="submit"
        variant="outline-primary"
        v-on:click="checkInputsValue"
        >送出</b-button
      >
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
      max: 15,
      min: 7,
      form: {
        account: "",
        email: "",
        password: "",
      },
      show: true,
    };
  },
  methods: {
    /**
     * 檢查inputs值。
     * 若檢查通過，則把值傳給register function
     * */
    checkInputsValue() {
      const account = document.getElementById("register_account").value;
      const email = document.getElementById("register_email").value;
      const pwd = document.getElementById("register_password").value;

      let accountPattern = /[0-9A-Za-z]i/;
      let passwordPattern = /^[0-9A-Za-z]\w{7,14}$/;
      if (email.search("@") === -1) {
        alert("email錯誤");
      }
      if (
        accountPattern.test(account) === false ||
        account.length < 5 ||
        account.length > 15
      ) {
        alert("請重設帳號");
      }
      if (pwd.match(passwordPattern) === null) {
        alert("請重設密碼");
      }
      console.log(account);
      console.log(email);
      console.log(pwd);
    },
    onSubmit(event) {
      event.preventDefault();
      // alert(JSON.stringify(this.form));
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.email = "";
      this.form.account = "";
      this.form.password = "";
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
    /**
     * 註冊。
     * 把接收到的值傳到後端處理
     * */
    register() {
      axios
        .post("/api/shop/register", {
          account: "Fred",
          email: "Flintstone",
          pwd,
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>