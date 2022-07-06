<template>
  <!-- 註冊頁面 -->
  <div class="container">
    <h1>註冊</h1>
    <b-form @submit.stop.prevent>
      <label for="text-password">Password</label>
      <b-form-input
        type="password"
        id="text-password"
        aria-describedby="password-help-block"
      ></b-form-input>
      <b-form-text id="password-help-block">
        Your password must be 8-20 characters long, contain letters and numbers,
        and must not contain spaces, special characters, or emoji.
      </b-form-text>
    </b-form>

    <!-- <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="input-group-2" label="你的帳號" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.account"
          placeholder="輸入帳號"
          required
        ></b-form-input>
      </b-form-group>

      <b-form-group
        id="input-group-1"
        label="Email:"
        label-for="input-1"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          placeholder="輸入email"
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
    </b-form> -->
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