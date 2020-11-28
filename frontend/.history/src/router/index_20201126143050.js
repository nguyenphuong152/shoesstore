import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Customer/Home.vue";
import Men from "../views/Customer/Men.vue";
import Women from "../views/Customer/Women.vue";
import Admin from "../views/Admin/Admin.vue";
import Product from "../views/Admin/ManageProduct.vue";
import Banner from "../views/Admin/Banner.vue";
import Category from "../views/Admin/Category.vue";
import ManageUser from "../views/Admin/ManageUser.vue";
import OrderList from "../views/Admin/OrderList.vue";
import Dashboard from "../views/Admin/Dashboard.vue"
//import ProductDetail from "../views/ProductDetail.vue"

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/men",
    name: "Men",
    component: Men,
  },
  {
    path: "/women",
    name: "Women",
    component: Women,
  },
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/About.vue"),
  },
  {
    path: "/contact",
    name: "Contact",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/Contact.vue"),
  },
  {
    path: "/cart",
    name: "Cart",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/Cart.vue"),
  },
  {
    path: "/account",
    name: "Account",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/Account.vue"),
  },
  {
    path: "/userlogin",
    name: "UserLogin",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/UserLogin.vue"),
  },
  {
    path: "/checkout",
    name: "Checkout",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/Checkout.vue"),
  },
  {
    path: "/product/:id",
    name: "ProductDetail",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/Customer/ProductDetail.vue"),
  },
  // {
  //   path: "/cart",
  //   name: "Cart",
  //   component: () =>
  //     import(/* webpackChunkName: "about" */ "../views/Customer/Cart.vue"),
  // },
  {
    path: "/admin",
    name: "Admin",
    component: Admin,
    children: [
      {
        path: "/banner",
        name: "Banner",
        component: Banner,
      },
      {
        path: "/category",
        name: "Category",
        component: Category,
      },
      {
        path: "/product",
        name: "Product",
        component: Product,
      },
      {
        path: "/manageuser",
        name: "ManageUser",
        component: ManageUser,
      },
      {
        path: "/orderlist",
        name: "OrderList",
        component: OrderList,
      },
      {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
      },
    ],
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
