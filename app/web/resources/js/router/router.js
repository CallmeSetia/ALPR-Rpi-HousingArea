import {createRouter, createWebHistory} from "vue-router"

import Login from "../views/auth/Login.vue";
import SplashScreen from "../views/auth/SplashScreen.vue";
import Penghuni from "../views/penghuni/Penghuni.vue";
import Penjaga from "../views/penjaga/Penjaga.vue";
import PenghuniPenjaga from  "../views/penjaga/Penhuni.vue"
import Control from "../views/penjaga/Control.vue";
import Tamu from "../views/penjaga/Tamu.vue";

const routes = [
    {
        path: '/login',
        name: 'Login',
        component: Login,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/login/loading',
        name: 'Slpash',
        component: SplashScreen,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/penghuni',
        name: 'Penghuni',
        component: Penghuni,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/penjaga',
        name: 'Penjaga',
        component: Penjaga,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/penjaga/tamu',
        name: 'Tamu',
        component: Tamu,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/penjaga/penghuni',
        name: 'Penghuni Penjaga',
        component: PenghuniPenjaga,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: '/penjaga/control',
        name: 'Control',
        component: Control,
        meta: {
            requiresAuth: false
        }
    }

]

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`w
})

// Middleware

// router.beforeEach((to, from, next) => {
//     // Cek jika route membutuhkan auth
//     if (to.matched.some(record => record.meta.requiresAuth)) {
//         // Cek jika user sudah login
//         if (!localStorage.getItem('authToken')) {
//             // Redirect ke halaman login jika user belum login
//             next({
//                 path: '/login',
//                 query: { redirect: to.fullPath }
//             })
//         }
//         else {
//             // Cek jika token bearer sudah expired
//             const tokenExpiration = localStorage.getItem('authTokenExpiration')
//             if (Date.now() >= tokenExpiration) {
//                 // Hapus informasi auth dari localStorage
//                 localStorage.removeItem('authToken')
//                 localStorage.removeItem('authTokenExpiration')
//                 // Redirect ke halaman login jika token bearer sudah expired
//                 next({
//                     path: '/login',
//                     query: { redirect: to.fullPath }
//                 })
//             }
//             else {
//                 // Jika user sudah login dan token bearer masih valid, lanjutkan navigasi ke route
//                 next()
//             }
//         }
//     }
//     else {
//         // Cek jika pengguna sudah masuk dan mencoba mengakses halaman login
//         if (to.path === '/login' && localStorage.getItem('authToken')) {
//             // Redirect ke halaman sebelumnya atau halaman dashboard jika pengguna sudah masuk
//             next(from.path !== '/login' ? from.path : '/dashboard')
//         } else {
//             // Jika route tidak membutuhkan auth, lanjutkan navigasi ke route
//             next()
//         }
//     }
//
// })
export default router
