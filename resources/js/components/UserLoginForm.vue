<template>
  <!-- 登入 -->
  <div class="container">
    <h1>登入</h1>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="loginKey" label="帳號名稱" label-for="loginKey">
        <b-form-input
          id="login_key"
          v-model.trim="form.name"
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
      <!-- <b-button
        type="submit"
        variant="outline-primary"
        v-on:click="checkInputsValue"
        >送出</b-button
      > -->
      <b-button type="submit" variant="outline-primary">送出</b-button>
      <b-button type="reset" variant="danger">重設</b-button>

      <p>沒有帳號?到<router-link to="/register">註冊</router-link></p>
    </b-form>
  </div>
</template>
<script>
export default {
  // pass isLoggedIn的值到user menu
  props: {
    isLoggedIn: {
      type: Boolean,
    },
    loggedName: {
      type: String,
    },
  },
  mounted() {
    // console.log("login");
  },
  data() {
    return {
      min: 5,
      max: 20,
      form: {
        name: this.name ? this.name : "",
        password: this.password ? this.password : "",
        role: "A" ? "A" : "M",
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

      if (name === "") {
        alert("帳號錯誤。");
        return;
      }
      if (pwd === "") {
        alert("密碼錯誤");
        return;
      }
      return true;
    },
    onSubmit(event) {
      event.preventDefault();
      // alert(JSON.stringify(this.form));
      if (this.checkInputsValue() === true) {
        return this.login();
      }
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
      // console.log(typeof this.form);
      axios
        .post("api/shop/login", {
          form: this.form,
        })
        .then((response) => {
          this.isLoggedIn = true;
          this.loggedName = this.form.name;
          console.log(this.isLoggedIn);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
