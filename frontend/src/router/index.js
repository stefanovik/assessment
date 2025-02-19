import { createRouter, createWebHistory } from 'vue-router';
import MainLayout from '@/components/MainLayout.vue';
import ScreenOne from "@/components/ScreenOne.vue";
import ScreenTwo from "@/components/ScreenTwo.vue";
import ScreenThree from "@/components/ScreenThree.vue";

const routes = [
    {
        path: '/',
        component: MainLayout,
        children: [
            { path: 'screen-one', component: ScreenOne },
            { path: 'screen-two', component: ScreenTwo },
            { path: 'screen-three', component: ScreenThree },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
