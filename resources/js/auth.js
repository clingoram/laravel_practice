import Vue from 'vue';
import Router from 'vue-router';

const state = {
  user: null,
};

const getters = {
  isAuthenticated: state => !!state.user,
  StateUser: state => state.user,
};


export default {
  getters,
  state
};