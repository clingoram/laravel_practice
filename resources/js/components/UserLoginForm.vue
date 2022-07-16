<template>
  <!-- 登入 -->
  <div class="container">
    <h1>登入</h1>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="loginKey" label="帳號名稱" label-for="loginKey">
        <b-form-input
          id="login_key"
          v-model="form.name"
          placeholder="使用者名稱"
          required
          v-bind:max="max"
          v-bind:min="min"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="loginPassword" label="密碼" label-for="loginPassword">
        <b-form-input
          id="login_password"
          v-model="form.password"
          placeholder="密碼"
          type="password"
          required
          autocomplete="on"
        ></b-form-input>
      </b-form-group>
      <!-- <b-form-checkbox size="sm" id="remember">Remember Me</b-form-checkbox> -->

      <b-button
        type="submit"
        variant="outline-primary"
        v-on:click="checkInputsValue"
        >送出</b-button
      >
      <b-button type="reset" variant="danger">重設</b-button>
      <b-button variant="dark">忘記密碼?</b-button>

      <p>沒有帳號?到<router-link to="/register">註冊</router-link></p>
    </b-form>
  </div>
</template>
<script>
export default {
  mounted() {
    // console.log("login");
  },
  data() {
    return {
      min: 5,
      max: 20,
      form: {
        // email: "",
        name: "",
        password: "",
        // status: "Remember_Me",
      },
      show: true,
    };
  },
  methods: {
    /**
     * 檢查inputs值。
     * 若檢查通過，則把值傳給function
     * */
    checkInputsValue() {
      const name = document.getElementById("login_key").value;
      const pwd = document.getElementById("login_password").value;

      let accountPattern = /^[0-9A-Za-z]+$/;
      let passwordPattern = /^[0-9A-Za-z]\w{7,14}$/;

      if (accountPattern.test(name) === false) {
        alert(`帳號長度請重設。`);
        return;
      }
      if (pwd.match(passwordPattern) === null) {
        alert("請重設密碼");
        return;
      }
      // let data = {
      //   name: name,
      //   email: email,
      //   pwd: pwd,
      // };

      return [name, pwd];
    },
    onSubmit(event) {
      event.preventDefault();
      // alert(JSON.stringify(this.form));
      return this.login();
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      // this.form.email = "";
      this.form.name = "";
      this.form.password = "";
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
    login() {
      let loginData = this.checkInputsValue();
      console.log(loginData);
      axios
        .get("api/shop/login", {
          // name: loginData.name,
          // pwd: loginData.pwd,
          params: {
            name: loginData.name,
            pwd: loginData.pwd,
          },
        })
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
