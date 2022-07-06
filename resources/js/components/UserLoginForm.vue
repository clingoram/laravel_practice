<template>
  <!-- 登入 -->
  <div class="container">
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="input-group-2" label="你的帳號" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.account"
          placeholder="輸入帳號"
          required
        ></b-form-input>
      </b-form-group>

      <!-- <b-form-group
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
      </b-form-group> -->

      <b-form-group id="password-1" label="你的帳號" label-for="password">
        <b-form-input
          id="password"
          v-model="form.password"
          placeholder="輸入密碼"
          required
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
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
