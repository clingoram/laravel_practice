<template>
  <!-- Header搜尋區塊 -->
  <b-nav-form>
    <!-- <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
     -->
    <nav class="navbar">
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <!-- <button class="btn btn-outline-success" type="submit"> -->
          <!-- <font-awesome-icon icon="fa-solid fa-magnifying-glass" />
          <font-awesome-icon :icon="['fas', 'search']" class="icon alt" /> -->
          <!-- </button> -->
        </form>
      </div>
    </nav>
  </b-nav-form>
</template>
<script>
export default {
  // name: "b-form-input",
  mounted() {
    // console.log("search");
  },
  data() {
    return {
      // text: "",
    };
  },
};
</script>