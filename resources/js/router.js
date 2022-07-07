import Vue from 'vue';
import Router from 'vue-router';

// 引用頁面的 Component
import RegisterPage from './components/UserRegisterForm.vue';
import LoginPage from './components/UserLoginForm.vue';

// 使用 Vue Router
Vue.use(Router);

// Route 設定
export const routes = [
  { path: '/register', component: RegisterPage, name: "register-page" },
  { path: '/login', component: LoginPage, name: "login-page" },
  { path: '/shop', redirect: '/home' },
];

// 建立 Vue Router instance
const router = new Router({
  mode: 'history',
  // history: createWebHashHistory(),
  routes
});

export default router;