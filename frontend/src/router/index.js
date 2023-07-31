import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CheckView from '../views/CheckView.vue'
import InterferenceView from '../views/InterferenceView.vue'
import UsersVue from '../views/UsersVue.vue'
import TMAView from '../views/TMAView.vue'
import CrossFeederView from '../views/CrossFeederView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
        path: '/check',
        name: 'check',
        component: CheckView
    },
    {
        path: '/interference',
        name: 'interference',
        component: InterferenceView
    },
    {
        path: '/users',
        name: 'users',
        component: UsersVue
    },
    {
        path: '/tma',
        name: 'tma',
        component: TMAView
    },
    {
        path: '/cross',
        name: 'cross',
        component: CrossFeederView
    },
  ]
})

export default router
