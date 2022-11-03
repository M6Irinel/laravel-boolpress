// @ts-nocheck
import HomeVue from '../pages/Home.vue';
import PostsVue from '../pages/Posts.vue';
import ChiSiamo from '../pages/ChiSiamo.vue';
import Contatti from '../pages/Contatti.vue';
import Show from '../pages/Show.vue';
import NotFound from '../pages/NotFound.vue';

export default [
    {
        path: '/',
        name: 'home',
        component: HomeVue
    },
    {
        path: '/blog',
        name: 'posts.index',
        component: PostsVue
    },
    {
        path: '/chi-siamo',
        name: 'about-us',
        component: ChiSiamo
    },
    {
        path: '/contatti',
        name: 'contact-us',
        component: Contatti
    },
    {
        path: '/blog/:slug',
        name: 'posts.show',
        component: Show
    },
    {
        path: '*',
        name: 'not-found',
        component: NotFound
    }
]
